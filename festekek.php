<?php $cim = "Festékek"; $sorszam = 2; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $szinek = ["Abszintzöld", "Acélkék", "Áfonyakék", "Áfonyavörös", "Agyagszín", "Akáclila", "Akvamarinkék", "Almazöld", "Angyalszőke", "Anlinkék", "Aranyrokker", "Aranysárga", "Bronzvörös", "Búzasárga", "Cédruszöld", "Chilivörös", "Ciklámenszín", "Hínárzöld", "Holdezüst", "Homokszín", "Zsetfekete", "Rubinvörös", "Sajtsárga"];
?>

<div class="container mt-3 mb-3 p-3 d-flex flex-md-row flex-wrap justify-content-center">
    <div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark text-start p-3">
        <img src="img/vodor.png" alt="" class="col-12">
        <h4>Albert beltéri falfesték <?php echo $szinek[0]?> (2 liter)</h4>
        <p class="p-0 m-0"><span class="fw-bold">Gyártó: </span>Hat szivárvány nyrt.</p>
        <p class="p-0 m-0"><span class="fw-bold">Felhasználás: </span>beltér</p>
        <p class="p-0 m-0"><span class="fw-bold">Mennyiség: </span>2 liter</p>
        <p class="p-0 m-0"><span class="fw-bold">Egységár: </span>2500 Ft/liter</p>
    </div>
    <?php
        for ($i=1; $i < count($szinek); $i++) { 
            $elem = $szinek[$i];
            echo '<div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark text-start p-3">',
            '<img src="img/vodor.png" alt="" class="col-12">',
            '<h4>Albert beltéri falfesték ', $elem, ' (2 liter)</h4>',
            '<p class="p-0 m-0"><span class="fw-bold">Gyártó: </span>Hat szivárvány nyrt.</p>',
            '<p class="p-0 m-0"><span class="fw-bold">Felhasználás: </span>beltér</p><p class="p-0 m-0"><span class="fw-bold">Mennyiség: </span> ', 2,' liter</p>',
            '<p class="p-0 m-0"><span class="fw-bold">Egységár: </span>2500 Ft/liter</p></div>';
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>