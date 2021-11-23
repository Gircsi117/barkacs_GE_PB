<?php
    $nevek = ["Colostok", "Csavarhúzó", "Flex", "Fűrész", "Fúró", "Kalapács", "Láncfűrész", "Mérőszalag", "Metszőolló", "Pajszer", "Talicska"];
?>

<?php $cim = "Árajánlat"; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>
<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3">
<center>
<h1>Árajánlat igénylése</h1>
<br>
<form>
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control" id="nev" placeholder="">
        <label for="nev">Név: </label>
    </div>
    <div class="form-floating mb-3 w-50">
        <input type="email" class="form-control" id="email" placeholder="">
        <label for="floatingText">E-mail: </label>
    </div>
    <div class="form-floating mb-3 w-50">
        <input type="telefon" class="form-control" id="telefon" placeholder="+36">
        <label for="floatingText">Telefon: </label>
    </div>
    <div class="form-floating mb-3 w-50">
        <select class="form-select pb-1" id="szerszamok">
        <option selected>Válaszon egy kategóriát!</option>
        <?php 
            for ($i=0; $i < count($nevek); $i++) { 
                echo '<option value="',$nevek[$i] ,'">',$nevek[$i] ,'</option>';
            }
        ?>
    </select>
    <label for="szerszamok">Szerszám: </label>
    <button type="submit" class="btn btn-primary float-end my-4"><a href="szerszamkatalogus.php" onClick='alert("Az igénylést elküldtük")' style="text-decoration: none; color: white;">Igénylés</a></button>
    </div>
</form>
</center>
</div>

<?php include 'templates/footer.php' ?>