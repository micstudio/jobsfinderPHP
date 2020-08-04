<section class="header-page">

</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row">
            <h3>Login</h3>
        </div>
        <div class="row ">

            <form class="form-job" action="/?action=login" method="post">
                <div class="row">

                    <div class="col-6">
                        <label>Login</label>
                    </div>
                    <div class="col-6">
                        <label>Password</label>
                    </div>
                    <div class="col-6">

                        <input type="text" name="login">
                    </div>
                    <div class="col-6">

                        <input type="password" name="password">
                    </div>
                    <br>

                    <br>
                    <input class="p-2 ml-3" name="submit" value="log in" type="submit">
                </div>
            </form>
            <div class="w-100 mt-3 mb-4">
                <a href="/">Return to home page</a>
            </div>

            <?php if (!empty($params['error'])) {
                switch ($params['error']) {
                    case '1':
                        echo '<div class="error-page">wrong date: login or email</div>';
                        break;
                    case 'empty':
                        echo '<div class="error-page">login or password provided is empty.</div>';
                        break;
                    default:
                        echo '<div class="error-page">wrong error</div>';
                        break;
                }
            }

            ?>
        </div>

    </div>



</section>