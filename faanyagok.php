<?php $cim = "Faanyagok"; $sorszam = 3; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $imgdiv = "faanyag col-12 col-md-3 d-flex flex-column align-items-center mt-2";
    $img = "rounded-circle col-7 col-md-10";
?>

    <div class="container">
        <div class="d-flex flex-column flex-md-row flex-wrap align-content-start">
            <div class="<?php echo $imgdiv ?>">
                <img src="img/bukk.jpg" alt="" class="<?php echo $img ?>">
                <a href="#elvalaszto"><h3 class="faanyag_gomb">Bükk</h3></a>
            </div>
            <div class="<?php echo $imgdiv ?>">
                <img src="img/cseresznye.jpg" alt="" class="<?php echo $img ?>">
                <a href="#elvalaszto"><h3 class="faanyag_gomb">Cseresznye</h3></a>
            </div>
            <div class="<?php echo $imgdiv ?>">
                <img src="img/dio.jpg" alt="" class="<?php echo $img ?>">
                <a href="#elvalaszto"><h3 class="faanyag_gomb">Dió</h3></a>
            </div>
            <div class="<?php echo $imgdiv ?>">
                <img src="img/mahagoni.jpg" alt="" class="<?php echo $img ?>">
                <a href="#elvalaszto"><h3 class="faanyag_gomb">Mahagóni</h3></a>
            </div>
            <div class="<?php echo $imgdiv ?>">
                <img src="img/tolgy.jpg" alt="" class="<?php echo $img ?>">
                <a href="#elvalaszto"><h3 class="faanyag_gomb">Tölgy</h3></a>
            </div>
        </div>
        <hr class="elvalaszto" id="elvalaszto">
        <div class="anyag_leiras">
            <h1 class="text-center">Bükk</h1>
            <img src="img/bukk.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur alias quia ratione totam molestias? Magni unde quod molestiae quas laudantium odit non blanditiis, aliquam dolorum eum quibusdam neque voluptas dolores?
            Sequi ullam rerum nobis enim aliquam quia! Natus placeat sed quidem ipsum libero tempora. Earum, ullam nulla maxime, possimus asperiores, deserunt quisquam officia odio aut at debitis perspiciatis adipisci placeat!
            Enim libero nihil architecto totam perferendis neque excepturi animi maiores inventore quas natus iusto cumque, harum, accusamus perspiciatis ex possimus assumenda. Non sit excepturi eligendi dolorum unde impedit blanditiis nihil!
            Dignissimos, aliquam in! Cum quis beatae error, eveniet deserunt nobis dignissimos quasi possimus ipsum? Sunt amet esse qui vel sint fugiat dignissimos culpa, reiciendis consequuntur aperiam aliquam et, voluptates veniam.
            Dolor id soluta nulla fugit autem ipsa inventore esse qui ea, dolorem, sequi commodi perspiciatis rerum quisquam animi doloremque maxime omnis, minima molestiae architecto praesentium nam! Repellat sint dolorem explicabo!</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include 'templates/footer.php' ?>