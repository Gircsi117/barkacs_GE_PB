<?php
    $nevek = ["Colostok", "Csavarhúzó", "Flex", "Fűrész", "Fúró", "Kalapács", "Láncfűrész", "Mérőszalag", "Metszőolló", "Pajszer", "Talicska"];
?>

<?php $cim = "Árajánlat"; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>
<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3">
<center>
<h1>Árajánlat igénylése</h1>
<br>
<form id = "ajanlat">
    <div class="form-floating mb-3 col-12 col-md-6">
        <input type="text" class="form-control" id="nev" placeholder="">
        <label for="nev">Név: </label>
    </div>
    <div class="form-floating mb-3 col-12 col-md-6">
        <input type="email" class="form-control" id="email" placeholder="">
        <label for="email">E-mail: </label>
    </div>
    <div class="form-floating mb-3 col-12 col-md-6">
        <input type="tel" class="form-control" id="telefon" placeholder="">
        <label for="telefon">Telefon: </label>
    </div>
    <div class="form-floating mb-3 col-12 col-md-6">
        <input type="number" class="form-control" id="darab" placeholder="" min="1">
        <label for="telefon">Darab szám: </label>
    </div>
    <div class="form-floating mb-3 col-12 col-md-6">
        <select class="form-select pb-1" id="szerszamok">
        <option selected>Válaszon egy kategóriát!</option>
        <?php 
            for ($i=0; $i < count($nevek); $i++) { 
                echo '<option value="',$nevek[$i] ,'">',$nevek[$i] ,'</option>';
            }
        ?>
    </select>
    <label for="szerszamok">Szerszám: </label>
    <button type="submit" class="btn btn-primary my-4 col-12 col-md-6">Igénylés</button>
    </div>
</form>
</center>
</div>

<?php include 'templates/footer.php' ?>