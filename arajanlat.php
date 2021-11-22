<?php
    $nevek = ["Colostok", "Csavarhúzó", "Flex", "Fűrész", "Fúró", "Kalapács", "Láncfűrész", "Mérőszalag", "Metszőolló", "Pajszer", "Talicska"];
?>

<?php include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>
<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3">
<center>
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
        <input type="email" class="form-control" id="email" placeholder="+36 ">
        <label for="floatingText">Telefon: </label>
    </div>
    <div class="form-floating mb-3 w-50">
        <select class="form-select" id="szerszamok">
        <option selected>Válaszon egy kategóriát!</option>
        <?php 
            for ($i=0; $i < count($nevek); $i++) { 
                echo '<option value="',$nevek[$i] ,'">',$nevek[$i] ,'</option>';
            }
        ?>
    </select>
    <label for="szerszamok">Szerszám: </label>
    <a href="szerszamkatalogus.php"><button type="submit" class="btn btn-primary float-end my-4">Igénylés</button></a>
    </div>
</form>
</center>
</div>

<?php include 'templates/footer.php' ?>