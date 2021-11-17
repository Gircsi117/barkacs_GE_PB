<?php $cim = "Szerszámkatalógus"; $sorszam = 4; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    class Szerszam
    {
        public $nev;
        public $leiras;

        function __constuct($name, $text){
            $this->$nev = $name;
            $this->leiras = $text;
            
        }
    }
    
    $alma = [new Szerszam("Sanyi", "Ez a leírás")]; 
?>

<div class="container mt-3 mb-3 p-3 d-flex flex-md-row flex-wrap justify-content-center">
    <div class="festek col-lg-3 col-md-4 col-sm-6 col-12 border border-1 border-dark text-start p-3">
        <img src="img/vodor.png" alt="" class="col-12">
        <h4>Albert beltéri falfesték alma (2 liter)</h4>
        <p class="p-0 m-0"><span class="fw-bold">Gyártó: </span>Hat szivárvány nyrt.</p>
        <p class="p-0 m-0"><span class="fw-bold">Felhasználás: </span>beltér</p>
        <p class="p-0 m-0"><span class="fw-bold">Mennyiség: </span>2 liter</p>
        <p class="p-0 m-0"><span class="fw-bold">Egységár: </span>2500 Ft/liter</p>
    </div>
    <?php
        for ($i=1; $i < 0; $i++) { 
            
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>