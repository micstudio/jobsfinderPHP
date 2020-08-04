<section class="header-page">

</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row">
            <h3>Register new User</h3> 
        </div>
        <div class="row ">
            <form class="form-job"action="" method="post">
                <div class="row">
                    <div class="col-6">
                        <label>nick</label>
                    </div>
                    <div class="col-6">
                        <label>email</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="login">
                    </div>
                    <div class="col-6">
                        <input type="text" name="email">
                    </div>
                    <div class="col-6">
                    <label>password</label>
                    </div>
                    <div class="col-6">
                    <label>password</label>
                    </div>
                    <div class="col-6">
                    <input type="password" name="password">
                    </div>
                    <div class="col-6">
                    <input type="password" name="password-2">
                    </div>
                    <div class="col-6">
                    <label>
                        <input type="radio" name="option" value="employee" required>
                        Employee
                    </label>    

                    <label>
                        <input type="radio" name="option" value="employer">
                        Employer
                    </label>
                    <div class="col-6">
                    <label>country</label>
                    </div>
                    <div class="col-6">
                    <input type="password" name="country">
                    </div>
                    </div>
                    
                    <div class="col-6">
                    <input value="Register" type="submit">
                    </div>

                    <br>


                    <br>
                    
                    
                    <br>
             
                    <br>

                    <br>

                    
                </div>
            </form>

        </div>
        <a href="/">Return to home page</a><br />
       
       <?php if (!empty($params['after'])) {
            switch ($params['after']) {
                case '1':
                    echo '<div class="error-page">login or email address is already taken. registration fails. try again.</div>';
                    break;
                case '2':
                    echo '<div class="error-page">password incorrect</div>';
                    break;
                case '3':
                    echo '<div class="error-page">user register! success..</div>';
                    break;
                default:

                    break;
            }
        }

        ?>

    </div>
</section>