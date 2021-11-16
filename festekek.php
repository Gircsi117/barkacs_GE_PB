<?php $cim = "Festékek"; $sorszam = 2; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<div class="container d-flex flex-md-row flex-wrap">
    <div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark">
        <img src="img/vodor.png" alt="" class="col-12">
    </div>
    <?php
        for ($i=0; $i < 100; $i++) { 
            echo '<div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark"><img src="img/vodor.png" alt="" class="col-12"> </div>';
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>