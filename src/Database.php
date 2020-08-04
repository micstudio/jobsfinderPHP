<?php

declare(strict_types=1);

namespace App;

use PDO;
use Exception;
use PDOException;

class Database
{
    private ?PDO $conn = null;
    public function __construct(array $config)
    {
        try {
            $this->validateConfig($config);
            $this->createConn($config);
        } catch (PDOException $err) {
        }
    }

    public function registerUser(array $data): void
    {

        $login = $this->conn->quote($data['login']);
        $email = $this->conn->quote($data['email']);
        $country = $this->conn->quote($data['country']);
        $password = $this->conn->quote($data['password']);
        $password2 = $this->conn->quote($data['password-2']);
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $option = $this->conn->quote($data['option']);
        $userGrants = '';

        if ($option === "'employee'") {
            $userGrants = 2;
        } else {
            $userGrants = 1;
        }

        $validQuery = "SELECT username,email FROM users WHERE ( username = $login OR email = $email) ";
        $result = $this->conn->query($validQuery);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if ($user > 0) {
            header("Location: /?action=register&after=1");
            exit;
        } elseif ($password !== $password2) {
            header("Location: /?action=register&after=2");
            exit;
        } else {
            $query = "
          INSERT INTO users(username, email, password,userGrants,country )
          VALUES($login, $email, '$passwordHash', $userGrants, $country
          )
        ";
            $this->conn->exec($query);
            header("Location: /?action=register&after=3");
            exit;
        }
    }

    public function verifyUser(array $data)
    {
        if (empty($data['login']) && empty($data['password'])) {
            header('Location: /?action=login&error=empty');
            exit();
        }
        $login = $this->conn->quote($data['login']);
        $password = $this->conn->quote($data['password']);



        $query = "SELECT * FROM users  WHERE username = $login";
        $result = $this->conn->query($query);
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            header("Location: /?action=login&error=1");
            exit();
        }
        $id = $user['id'];
        $email = $user['email'];
        $passwordhash = $user['password'];
        $userGrants = $user['userGrants'];
        if ($user) {
            if (password_verify($password, $passwordhash)) {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = str_replace("'", "", $login);
                $_SESSION['email'] = $email;
                $_SESSION['userGrants'] = $userGrants;
                header('Location: /?action=profiles');
                exit();
            } else {
                header('Location: /?action=login&error=1');
                exit();
            }
        } else {
            echo null;
        }
    }

    public function getUsersProfiles()
    {
        $query = "SELECT id,username FROM users WHERE userGrants = '2'";
        $result = $this->conn->query($query);
        $users = $result->fetchAll(PDO::FETCH_ASSOC);
        return $users;

    }

    public function getUsersProfile(int $id)
    {
        $query = "SELECT id,username,description,email, country FROM users WHERE id = $id";
        $result = $this->conn->query($query);
        $user = $result->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    public function createJob(array $data): void
    {

        try {
            $title = $this->conn->quote($data['title']);
            $time = $this->conn->quote($data['time']);
            $city = $this->conn->quote($data['city']);
            $company = $this->conn->quote($data['company']);
            $category = $this->conn->quote($data['category']);
            $description = $this->conn->quote($data['description']);
            $userId = $this->conn->quote($data['userId']);

            $query = "
          INSERT INTO jobs(title, company, time, city, category,userid,description)
          VALUES($title, $company, $time, $city, $category, $userId, $description
          )
        ";

            $this->conn->exec($query);
        } catch (PDOException $e) {
            throw new \PDOException('NEW JOB NOT ADD', 400, $e);
        }
    }

    public function getJobs(): array
    {
        $query = "SELECT * FROM jobs";
        $result = $this->conn->query($query);

        $jobs = $result->fetchAll(PDO::FETCH_ASSOC);

       

        // działą!! 
        // $servername = "localhost";
        // $dbname = "jobsfind_a2wp33";
        // $username = "jobsfind_a2wp33";
        // $password = "w8Z@p6S(8o";

        // $dsn = "mysql:dbname={$dbname};host={$servername}";
        // $check = $this->conn = new \PDO(
        //     $dsn,
        //     $username,
        //     $password
        // );

        // dump($check);exit;
       

        // $jobs = [
        //     'db' => [
        //         'id' => 56,
        //         'title' => 'jobs',
        //         'company' => 'user_one',
        //         'city' => 'ekwador',
        //         'TIME' => 'ekwador',
        //         'category' => 4,
        //         'userid' => 10,
        //         'description' => 'asdasdasdsa'
        //     ]
        // ];

        return $jobs;
    }

    public function logOut(): void
    {
        session_destroy();
    }

    public function getJob(int $id, bool $cond): array
    {


        if ($cond == 1) {
            $query = "SELECT * FROM jobs WHERE id = $id";
            $result = $this->conn->query($query);
            $job = $result->fetch(PDO::FETCH_ASSOC);

            if (!$job) {
                throw new Exception('jobs id not found');
            }
            return $job;
        } elseif ($cond == 0) {
            $query = "SELECT * FROM jobs WHERE userid = $id";
            $result = $this->conn->query($query);
            $job = $result->fetchAll(PDO::FETCH_ASSOC);


            return $job;
        }
    }

    public function getJobsFromCategory(int $id): array
    {
        $query = "SELECT * FROM jobs WHERE category = $id";
        $result = $this->conn->query($query);
        $category = $result->fetchAll(PDO::FETCH_ASSOC);

        if (!$category) {
            throw new Exception('jobs not found');
        }
        return $category;
    }

    public function search(string $searchWord): array
    {
        $query = "SELECT * FROM `jobs` WHERE title LIKE '%$searchWord%'";
        $result = $this->conn->query($query);
        $search = $result->fetchAll(PDO::FETCH_ASSOC);

        if (!$search) {
            throw new Exception('search word id not found');
        }
        return $search;
    }
    private function createConn(array $config): void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
        $check = $this->conn = new \PDO(
            $dsn,
            $config['user'],
            $config['password']
        );

        var_dump($check);
    }

    private function validateConfig(array $config): void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
        $this->conn = new \PDO(
            $dsn,
            $config['user'],
            $config['password'],
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}
