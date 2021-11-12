<?php $cim = "Faanyagok"; $sorszam = 3; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $imgdiv = "faanyag col-12 col-md-3 d-flex flex-column align-items-center mt-2";
    $img = "rounded-circle col-7 col-md-10";
?>

    <div class="container d-flex flex-column flex-md-row flex-wrap align-content-start">
        <div class="<?php echo $imgdiv ?>">
            <img src="img/bukk.jpg" alt="" class="<?php echo $img ?>">
            <h3>Bükk</h3>
        </div>
        <div class="<?php echo $imgdiv ?>">
            <img src="img/cseresznye.jpg" alt="" class="<?php echo $img ?>">
            <h3>Cseresznye</h3>
        </div>
        <div class="<?php echo $imgdiv ?>">
            <img src="img/dio.jpg" alt="" class="<?php echo $img ?>">
            <h3>Dió</h3>
        </div>
        <div class="<?php echo $imgdiv ?>">
            <img src="img/mahagoni.jpg" alt="" class="<?php echo $img ?>">
            <h3>Mahagóni</h3>
        </div>
        <div class="<?php echo $imgdiv ?>">
            <img src="img/tolgy.jpg" alt="" class="<?php echo $img ?>">
            <h3>Tölgy</h3>
        </div>
    </div>

<?php include 'templates/footer.php' ?>