<section class="header-page">
</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row ">
            <div class="col-12">
                <h3>User Profile</h3>
            </div><br>
            
        
            <?php
            echo "<div class='col-12'>Please login to view details</div><br><br>";
            
            if (!empty($_SESSION['id'])) : ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <img src="/public/images/user1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-9">
                            <h3><?php echo $params['0']['username'];?></h3>
                        <div class="row">
                            <div class="col-6"><?php echo $params['0']['email'];?></div>
                            <div class="col-6"><?php echo $params['0']['country'];?></div><br><br>
                            <div class="col-12"><?php echo $params['0']['description'];?></div>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>