<section class="header-page">
    
</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row ">
            <div class="col-12"><h3>Profil</h3></div>
        </div>
        <div><?php echo 'Hello '.$_SESSION['name'].' . Your email address: '.$_SESSION['email'] ?></div>
        <a href=""></a>

        <?php 
            if(!empty($params)){
                echo "<BR>Jobs added by You: <br><br>";
                foreach($params as $job){
                    echo '<a href=/?action=show&id='
                    .$job['id'].
                    '>'
                    .$job['title'].
                    '</a>'
                    .' <br >';
                }
            }elseif( $_SESSION['userGrants'] == 1) {
                echo "<br />You haven't added any job offers yet.";
                echo "<br /><br /> Do it now! Click!";
            }
            exit();

        ?>
        
    </div>
</section>