<?php

declare(strict_types=1);

namespace App;

require_once("src/Database.php");

class Controller
{
    //show head page 
    private const DEFAULT_ACTION = 'list';

    private Database $database;
    private array $request;
    private View $view;

    private static array $configuration = [];

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

    public function __construct(array $request)
    {
        $this->database = new Database(self::$configuration['db']);
        $this->request = $request;
        $this->view = new View();
    }

    public function action(): string
    {
        $data = $this->getReqGet();
        return $data['action'] ??  self::DEFAULT_ACTION;
    }
    public function run(): void
    {
        $action = $this->action();
        $viewParams = [];


        switch ($action) {
            case 'create':
                $page = 'create';

                $data = $this->getReqPost();


                if (!empty($data)) {
                   
                    $viewParams = [
                        'title' => $data['title'] ?? '',
                        'city' => $data['city'] ?? '',
                        'cash' => $data['cash'] ?? '',
                        'cash' => $data['cash'] ?? '',
                        'description' => $data['description'] ?? '',
                        'category' => $data['category'] ?? '',
                        'userId' => $data['userId'] ?? '',
                    ];
                    $this->database->createJob($data);
                    $data = $this->getReqGet();

                    $viewParams['before'] = $data['before'] ?? null;
                }
                break;
            case 'profile':
                $page = 'profile';
                $data = $this->getReqGet();
                $profile =  $this->database->getUsersProfile((int) $data['id']);
                $viewParams = $profile;
                break;
            case 'profiles':
                $page = 'profiles';
                $job = $this->database->getJob((int) $_SESSION['id'], false);
                $viewParams = $job;
                break;
            case 'category':
                $page = 'category';
                $data = $this->getReqGet();
                if(!empty($data['id'])){
                    $category = $this->database->getJobsFromCategory((int) $data['id']);
                    $viewParams = $category;   
                }
                //dump($data);exit();
                break;
            case 'search':
                $page = 'search';
                $data = $this->getReqPost();
                if (!empty($data['search'])) {
                    $search = $this->database->search((string) $data['search']);
                    $viewParams = $search;
                }

                break;
            case 'contact':
                $page = 'contact';
                break;
            case 'login':
                $page = 'login';
                $data = $this->getReqPost();
                if (!empty($data)) {
                    $this->database->verifyUser($data);
                }
                $data2 = $this->getReqGet();
                $viewParams['error'] = $data2['error'] ?? null;
                break;
            case 'logout':
                $this->database->logOut();
                header('Location: /');
                exit();
                break;
            case 'register':
                $page = 'register';
                $data = $this->getReqPost();
                if (!empty($data)) {
                    $this->database->registerUser($data);
                }
        
                $data2 = $this->getReqGet();
                $viewParams['after'] = $data2['after'] ?? null;

                //dump($viewParams['before']);exit;
                break;
            case 'show':
                $page = 'show';
                $data = $this->getReqGet();
                $job = $this->database->getJob((int) $data['id'], true);
                $viewParams = $job;
                break;
            default:
                $page = 'main';
                $jobs = $this->database->getJobs();
                $usersData = $this->database->getUsersProfiles();
                $viewParams['1'] = $jobs;
                $viewParams['2'] = $usersData;
                break;
        }
        $this->view->render($page, $viewParams);
    }

    private function getReqPost(): array
    {
        return $this->request['post'] ?? [];
    }

    private function getReqGet(): array
    {
        return $this->request['get'] ?? [];
    }
}
