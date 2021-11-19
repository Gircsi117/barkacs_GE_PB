<?php $cim = "Szerszámkatalógus"; $sorszam = 4; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $nevek = ["Colostok", "Csavarhúzó", "Flex", "Fűrész", "Fúró", "Kalapács", "Láncfűrész", "Mérőszalag", "Metszőolló", "Pajszer", "Talicska"];
    $elerheto = ["colostok", "csavarhuzo", "flex", "furesz", "furo", "kalapacs", "lancfuresz", "meroszalag", "ollo", "pajszer", "talicska"];
?>

<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3 d-flex flex-md-row flex-wrap justify-content-center">
    <div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark text-start p-3">
        <img src="img/Szerszamok/colostok.jpg" alt="" class="col-12">
        <h4 class="text-center">Széleskörő Colostok kínálat</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sunt obcaecati dolore aperiam animi sit quidem magnam! Voluptate nesciunt delectus doloremque corrupti officiis ex, tenetur ratione ea debitis culpa. Nostrum!</p>
        
    </div>
    <?php
        for ($i=1; $i < count($nevek); $i++) { 
            echo '<div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark text-start p-3">',
                    '<img src="img/Szerszamok/',$elerheto[$i] ,'.jpg" alt="" class="col-12">',
                    '<h4 class="text-center">Széleskörő ',$nevek[$i] ,' kínálat</h4>',
                    '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sunt obcaecati dolore aperiam animi sit quidem magnam! Voluptate nesciunt delectus doloremque corrupti officiis ex, tenetur ratione ea debitis culpa. Nostrum!</p>',
                '</div>';
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>