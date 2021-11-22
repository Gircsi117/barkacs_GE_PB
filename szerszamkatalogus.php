<?php $cim = "Szerszámkatalógus"; $sorszam = 4; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $nevek = ["Colostok", "Csavarhúzó", "Flex", "Fűrész", "Fúró", "Kalapács", "Láncfűrész", "Mérőszalag", "Metszőolló", "Pajszer", "Talicska"];
    $elerheto = ["colostok", "csavarhuzo", "flex", "furesz", "furo", "kalapacs", "lancfuresz", "meroszalag", "ollo", "pajszer", "talicska"];
?>

<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3 d-flex flex-md-row flex-wrap justify-content-center">
    
    <?php
        for ($i=0; $i < count($nevek); $i++) { 
            include 'templates/szerszam_minta.php';
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>