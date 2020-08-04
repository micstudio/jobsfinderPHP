<section class="header">
    <div class="container-fluid header__background">
        <div class="row header__row cd-flex justify-content-center align-items-center text-center">
            <div class="col-12 col-md-8 header__content ">
                <div class="header__head-title">
                    <h1>Find Next <span class="header__change-text"><span class="pan">opportunity</span><span class="pan hidden">occasion</span></span></h1>
                </div>
                <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ipsa rem quaerat
                    ad maiores
                    similique cumque reprehenderit incidunt a aut.</p>
                <form action="/?action=search" method="post">
                    <input type="text" name="search" required>

                </form>
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <div class="container categories__wrap p-5">
        <h2 class="text-center">Browse categories</h2>
        <div class="row categories__boxs p-3 mt-4">
            <div class="col-6 categories__box-1 d-flex p-4">
                <div class="col-2 d-none d-xl-block">
                    <img src="public/images/ico1.png" alt="ico">
                </div>
                <div class="col-12 col-xl-10">
                    <h6>Front-End Developer</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nobis voluptates, labore natus
                        delectus laudantium aperiam provident.</p>
                    <a href="/?action=category&id=1">Browse all offers ></a>
                </div>
            </div>
            <div class="col-6 categories__box-2 d-flex p-4">
                <div class="col-2 d-none d-xl-block">
                    <img src="public/images/ico2.png" alt="ico">
                </div>
                <div class="col-12 col-xl-10">
                    <h6>UI/UX Desinger</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nobis voluptates, labore natus
                        delectus laudantium aperiam provident.</p>
                    <a href="/?action=category&id=2">Browse all offers ></a>
                </div>
            </div>
            <div class="col-6 categories__box-3 d-flex p-4">
                <div class="col-2 d-none d-xl-block">
                    <img src="public/images/ico2.png" alt="ico">
                </div>
                <div class="col-12 col-xl-10">
                    <h6>Javascript Developer</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nobis voluptates, labore natus
                        delectus laudantium aperiam provident.</p>
                    <a href="/?action=category&id=3">Browse all offers ></a>
                </div>
            </div>
            <div class="col-6 categories__box-4 d-flex p-4">
                <div class="col-2 d-none d-xl-block">
                    <img src="public/images/ico1.png" alt="ico">
                </div>
                <div class="col-12 col-xl-10">
                    <h6>PHP Developer</h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nobis voluptates, labore natus
                        delectus laudantium aperiam provident. </p>
                    <a href="/?action=category&id=4">Browse all offers ></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profiles p-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Featured profiles</h2>
                <p class="text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>

        <div class="row text-center mt-4">
            <?php
            $output = array_slice($params['2'], 1, 6);
            foreach ($output ?? [] as $user) : ?>
                <div class="col-6 col-md-4 col-lg-4 col-xl-2">

                    <div class="profiles__title"><?php echo htmlentities($user['username']) ?></div>
                    <div class="profiles__status">Front-End Developer</div>
                    <img src="public/images/user1.jpg" alt="user">

                    <a href="/?action=profile&id=<?php echo htmlentities($user['id']) ?>"><button class="profiles__btn">View Profile</button></a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="banner">

</section>


<section class="jobs-list">
    <h2 class="text-center p-5">Hundreds of Jobs From All Over the Globe</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php

                $output = array_slice($params['1'], 0, 5);
                foreach ($output ?? [] as $job) : ?>
               
                    <div class="row align-items-center jobs-list__item ">
                        <div class="col-2">
                            <img src="public/images/ibm.png" alt="imb">
                        </div>
                        <div class="col-5 col-md-3">
                            <div><?php echo htmlentities($job['title']) ?></div>
                            <div><?php echo htmlentities($job['company']) ?></div>
                        </div>
                        <div class="col-3 d-none d-md-block">
                            <span><i class="fas fa-map-marker-alt fa-1x mr-2"></i><?php echo htmlentities($job['city']) ?></span>
                        </div>
                        <div class="col-3 col-md-2   ">
                            <a href="/?action=show&id=<?php echo $job['id'] ?>" class="full-time"><?php echo htmlentities($job['TIME']) ?></a>
                        </div>
                        <div class="col-2 col-md-1 ">
                            <a class="btn-more" href="/?action=show&id=<?php echo $job['id'] ?>">
                            <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
           
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>