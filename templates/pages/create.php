<?php
if ($_SESSION['userGrants'] == 2) {
    header('Location: /');
    exit();
}
?>

<section class="header-page">
</section>

<section class="content">
    <div class="container content__wrap  p-5">
        <?php
        if (!empty($params['before'])) {
            echo "<div class=\"msg\">";
            switch ($params['before']) {
                case "created":
                    echo "udalo sie dodać nowa praca";
                    break;
            }
            echo "</div>";
        }

        ?>
        <div class="row ">

            <h3>Jobs Post</h3>


            <form class="form-job row" action="/?action=create&before=created" method="post">

                <div class="col-6 col-md-6">Job Title*</div>
                <div class="col-6 col-md-6"><label>City *</label></div>
                <div class="col-6 col-md-6"><input type="text" name="title" class="field-long" required /></div>

                <div class="col-6 col-md-6"><input type="text" name="city" class="field-long" required /></div>

                <div class="col-6 col-md-6">TIME*</div>
                <div class="col-6 col-md-6">Stack *</div>

                <div class="col-6 col-md-6">
                    <label>
                        <input type="radio" name="time" value="Remote" required>
                        Remote
                    </label>
                    <label>
                        <input type="radio" name="time" value="Full-Time">
                        Full-Time
                    </label>
                    <label>
                        <input type="radio" name="time" value="Half-Time">
                        Half-Time
                    </label>
                </div>

                <div class="col-6 col-md-6">
                    <label>
                        <input type="radio" name="category" value="1" required>
                        Front-End
                    </label>
                    <label>
                        <input type="radio" name="category" value="2">
                        UX/UI Designer
                    </label>
                    <label>
                        <input type="radio" name="category" value="3">
                        JavaScript
                    </label>
                    <label>
                        <input type="radio" name="category" value="4">
                        PHP
                    </label>
                </div>
                <div class="col-6 col-md-6">Company*</div>
                <div class="col-6 col-md-6">Description *</div>
                <div class="col-6 col-md-6"><input type="text" name="company" class="field-long" required /></div>

                <div class="col-6 col-md-6"> <textarea name="description" rows="5" class="field-long field-textarea" required></textarea></div>

                <div class="col-12">
                    <input type="submit" value="submit" />
                    <?php

                    if (isset($_SESSION['id']))
                        echo '<input type="hidden" name="userId" value="' . $_SESSION['id'] . '"></input>';
                    ?>
                </div>


            </form>


        </div>
    </div>
</section>