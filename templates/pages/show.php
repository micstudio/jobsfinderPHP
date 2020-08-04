<section class="header-page">

</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row">
            <?php
            if (!empty($_SESSION['id'])) {
                echo "<h3>";
                echo $params['title'];
                echo "</h3>";
                echo $params['city'] . '<BR>';
                echo $params['company'] . '<BR>';
                echo $params['TIME'] . '<BR><br>';
                echo $params['description'].'<br><br>';
            }else {
                echo "<div class='col-12'>Please login to view details</div><br><br>";
            }
            ?>


           <div class="col-12"> <a href="/">Return to home page</a></div>
        </div>

    </div>
</section>