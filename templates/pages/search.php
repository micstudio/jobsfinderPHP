<section class="header-page">
</section>



<section class="content">
    <div class="container content__wrap  p-5">
        <div class="row ">
            <div class="col-12">
                <h3>Search</h3>
            </div>
            <?php foreach ($params as $job) : ?>
                <div class="col-3 col-xs-1 col-md-2 col-lg-1"><img src="public/images/ibm.png" alt="imb"></div>
                <div class="col-9 col-xs-11 col-md-10 col-lg-11 page-search">
                    <a href="/?action=show&id=<?php echo $job['id'] ?>"><?php echo $job['title'] ?></a><BR />
                    <?php echo $job['company'] ?><BR />
                    <?php echo '<i class="fas fa-map-marker-alt"></i>   '.$job['city'] ?>
                    <?php echo '<i class="fas fa-clock ml-4"></i> '.$job['TIME'] ?>
                    <BR />
                </div><BR />
            <?php endforeach; ?>
        </div>
    </div>
</section>

