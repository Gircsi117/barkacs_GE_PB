<?php $cim = "Faanyagok"; $sorszam = 3; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $imgdiv = "faanyag col-12 col-md-3 d-flex flex-column align-items-center mt-2";
    $img = "rounded-circle col-7 col-md-10";
?>

    <div class="container mt-0 mt-sm-3 mb-0 mb-sm-3">
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

        <!--Bükk-->

        <div class="anyag_leiras">
            <h1 class="text-center">Bükk</h1>
            <img src="img/bukk.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end m-2 border border-3 border-light">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur alias quia ratione totam molestias? Magni unde quod molestiae quas laudantium odit non blanditiis, aliquam dolorum eum quibusdam neque voluptas dolores?
            Sequi ullam rerum nobis enim aliquam quia! Natus placeat sed quidem ipsum libero tempora. Earum, ullam nulla maxime, possimus asperiores, deserunt quisquam officia odio aut at debitis perspiciatis adipisci placeat!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga corrupti possimus recusandae dolorem, beatae consequatur, quo iure facilis enim ipsum ad. Exercitationem commodi illo odit. Iste accusantium necessitatibus molestias beatae!
            Officiis odit libero rerum ipsam odio quam quas voluptates illo optio. Laudantium doloremque voluptas repudiandae blanditiis vero laboriosam accusantium. Alias unde nam maiores voluptates vitae debitis fuga aliquam aut distinctio!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis voluptatem vero, aspernatur aliquam dolor quaerat voluptates commodi cupiditate repellat ut saepe dignissimos tempore reiciendis et. Sequi autem alias esse! Iste?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem. Voluptatum a tempora saepe ad accusantium eius vel autem, vero eligendi, illo doloremque quos unde et inventore quisquam similique illum.
            Nulla placeat consequatur aut corrupti ex provident, porro excepturi sapiente temporibus modi nobis natus assumenda atque illum optio. At molestiae quibusdam officiis, dolores blanditiis veritatis consequatur suscipit quam in possimus?
            Pariatur reiciendis enim laboriosam dolorem, iure sapiente esse excepturi distinctio, assumenda exercitationem modi consectetur accusamus aliquid ut quod quo qui molestiae labore numquam ipsam nobis? Laboriosam sunt ea asperiores ut.</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td>10 - 20 m</td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td>0.9 - 1.5 m</td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td>0.68 g/cm3</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td>5.8 %</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td>11.8 %</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td>34 MPa</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td>72 MPa</td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td>14000 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td>62 MPa</td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td>123 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td>8 MPa</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Cseresznye-->

        <div class="anyag_leiras d-none">
            <h1 class="text-center">Cseresznye</h1>
            <img src="img/cseresznye.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end m-2 border border-3 border-light">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod voluptas aut esse praesentium tenetur aliquam ad! Dolore doloremque blanditiis provident sapiente, perferendis consectetur quas molestiae? Dicta rerum iste aliquid reprehenderit.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque modi tempora ad fuga aliquam magnam. Minima repudiandae mollitia error vero quibusdam. Placeat aliquam quas eligendi magni laboriosam autem consequuntur commodi.
            Cum recusandae animi aspernatur tempore explicabo? Excepturi, suscipit. Tenetur consectetur maiores inventore consequuntur? Cumque, placeat quibusdam dolores, quasi libero atque veritatis voluptatibus eius adipisci modi itaque minima harum. Cupiditate, qui.
            Iste officiis doloribus tempora voluptate sed. Molestias, enim laudantium consectetur facere perspiciatis exercitationem. Excepturi, optio. Commodi at perspiciatis quibusdam in minus dolorum deserunt aspernatur nisi aut dolore ea, odio excepturi.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis voluptatem vero, aspernatur aliquam dolor quaerat voluptates commodi cupiditate repellat ut saepe dignissimos tempore reiciendis et. Sequi autem alias esse! Iste?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non expedita nemo, cupiditate facere vero nam explicabo, excepturi neque aperiam nisi natus iusto. Explicabo id deleniti unde? Blanditiis illum facere eos!
            Quo optio unde quam tempora itaque adipisci iusto voluptate quis ipsa nostrum similique nisi fuga, quae earum harum consequuntur. Rerum qui atque nihil adipisci fugit molestiae dolorem ratione rem quisquam!</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td>15 - 20 m</td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td>0.7 - 1.3 m</td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td>0.72 g/cm3</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td>6.9 %</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td>10.3 %</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td>30 MPa</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td>77 MPa</td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td>13000 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td>60 MPa</td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td>117 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td>8 MPa</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Dió-->

        <div class="anyag_leiras d-none">
            <h1 class="text-center">Dió</h1>
            <img src="img/dio.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end m-2 border border-3 border-light">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, itaque! Totam accusamus voluptates obcaecati commodi eos laboriosam, tempora ea esse harum mollitia, enim, perferendis delectus. Delectus dolorem omnis cum doloremque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore suscipit magni dicta laborum autem. Dolor porro dignissimos architecto aspernatur voluptatibus. Ea, ab adipisci. Consectetur porro mollitia iure vero excepturi.
            Velit aliquam explicabo omnis nihil ad? Cum numquam maxime saepe aliquam officiis quos ipsum ex nam nisi, in minima corrupti facere, temporibus molestiae laudantium perspiciatis reprehenderit voluptatum! Ea, quasi nisi!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aperiam nihil dignissimos id quas cupiditate repellendus impedit quidem fugit vitae. Id fuga laboriosam, saepe omnis magnam voluptatem ullam velit odio!
            Perferendis vel, harum qui deleniti molestias quasi voluptates eveniet. Modi, vitae et reiciendis fugit blanditiis, at in tempora nemo doloremque exercitationem iusto eum, amet optio commodi. Soluta minus perspiciatis cupiditate.
            Perspiciatis dolores sequi dicta consequuntur error est omnis corrupti hic vero, natus ab in nam sit doloribus inventore similique neque explicabo rerum minus eius. Dolores cupiditate asperiores ea facilis beatae!
            Velit aliquam assumenda facere labore quo aut est ipsam ipsa libero ullam debitis dicta, tempore sit unde similique, numquam officiis praesentium enim quia laudantium. Est quibusdam omnis fuga officiis vel.
            Adipisci veniam nemo facere fugiat. Tempore, quod facilis? Temporibus minima aspernatur natus! Molestias necessitatibus laborum nesciunt nulla. Commodi similique voluptate quidem. Ducimus eum aliquid hic minima itaque quidem excepturi voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor architecto, pariatur doloremque est beatae! Enim natus molestias doloremque, ex minus harum dolorum, repudiandae sapiente, molestiae maiores vel deserunt pariatur.</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td>10 - 15 m</td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td>0.8 - 1 m</td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td>0.75 g/cm3</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td>5.8 %</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td>9.2 %</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td>31 MPa</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td>79 MPa</td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td>13500 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td>65 MPa</td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td>112 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td>9 MPa</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Mahagóni-->

        <div class="anyag_leiras d-none">
            <h1 class="text-center">Mahagóni</h1>
            <img src="img/mahagoni.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end m-2 border border-3 border-light">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla tempore, omnis qui dolores voluptas ipsum corrupti reprehenderit dolore distinctio, delectus exercitationem hic, aliquam aut cupiditate reiciendis cum libero perspiciatis! Voluptate.
            Totam, nihil culpa, quis ea, suscipit itaque consectetur numquam sapiente quisquam ratione excepturi commodi. Consequatur aspernatur tempora iure. Repudiandae deserunt quos itaque a consequuntur dolor repellendus incidunt enim assumenda sunt!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore suscipit magni dicta laborum autem. Dolor porro dignissimos architecto aspernatur voluptatibus. Ea, ab adipisci.</p>
            <p>Adipisci veniam nemo facere fugiat. Tempore, quod facilis? Temporibus minima aspernatur natus! Molestias necessitatibus laborum nesciunt nulla. Commodi similique voluptate quidem. Ducimus eum aliquid hic minima itaque quidem excepturi voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor architecto, pariatur doloremque est beatae! Enim natus molestias doloremque, ex minus harum dolorum, repudiandae sapiente, molestiae maiores vel deserunt pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas exercitationem neque cumque eveniet impedit repudiandae dolorem, illo enim! Vero magni expedita voluptates similique, unde molestiae sint sunt praesentium ullam esse!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio mollitia corrupti voluptatibus error inventore corporis! Soluta, numquam quis quae sunt in deleniti corporis doloribus iusto quia veritatis ipsa? Officia, necessitatibus?</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td>15 - 20 m</td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td>1 - 1.2 m</td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td>0.79 g/cm3</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td>4.5 %</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td>10.3 %</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td>28 MPa</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td>70 MPa</td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td>12050 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td>70 MPa</td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td>119 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td>9 MPa</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Tölgy-->

        <div class="anyag_leiras d-none">
            <h1 class="text-center">Tölgy</h1>
            <img src="img/tolgy.jpg" alt="" class="rounded-circle col-6 col-sm-6 col-md-4 col-lg-3 float-end m-2 border border-3 border-light">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quibusdam nesciunt ea odio. Molestias, eum ratione suscipit assumenda sed consectetur dolores, natus amet dignissimos consequatur accusamus ducimus quam id necessitatibus!
            Quas nemo dolor ducimus. Odio, minus laudantium quo, earum eos hic, quae aut qui dolorem repellendus perferendis ab ipsa? Odio facilis explicabo soluta nesciunt vel architecto corrupti cumque est modi!
            Aspernatur doloribus, ullam voluptatem velit sequi eius soluta totam odio ipsam fuga corrupti, placeat id, aliquid modi illum laboriosam impedit hic sapiente odit optio eum numquam. Et laborum tempora id?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam quod consectetur blanditiis! Eius veniam debitis sint expedita modi, animi, aliquid quis architecto sed, cum blanditiis tempora repellendus voluptatibus. Laboriosam, sint.
            Repudiandae, inventore exercitationem odio praesentium quae sequi consectetur cupiditate necessitatibus distinctio molestiae voluptates quasi dignissimos quaerat consequatur adipisci, iusto, vitae a eveniet eos fugit. Ipsum officia dignissimos quas enim voluptatem.</p>
            <p>Adipisci veniam nemo facere fugiat. Tempore, quod facilis? Temporibus minima aspernatur natus! Molestias necessitatibus laborum nesciunt nulla. Commodi similique voluptate quidem. Ducimus eum aliquid hic minima itaque quidem excepturi voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor architecto, pariatur doloremque est beatae! Enim natus molestias doloremque, ex minus harum dolorum, repudiandae sapiente, molestiae maiores vel deserunt pariatur.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio mollitia corrupti voluptatibus error inventore corporis! Soluta, numquam quis quae sunt in deleniti corporis doloribus iusto quia veritatis ipsa? Officia, necessitatibus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, dolorum? Labore, est, ea perspiciatis vero provident atque nostrum earum quam voluptas alias consequuntur consequatur suscipit dicta, veritatis ipsa fugiat saepe.</p>
            <table class="col-12 faanyag_table">
                <thead>
                    <th class="col-9 bg-dark text-light">Tulajdonság</th>
                    <th class="col-3 bg-dark text-light">Érték</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Rönkhossz</td>
                        <td>15 - 25 m</td>
                    </tr>
                    <tr>
                        <td>Rönkátmérő</td>
                        <td>0.5 - 1.5 m</td>
                    </tr>
                    <tr>
                        <td>Sűrűség</td>
                        <td>0.85 g/cm3</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás sugárirányban</td>
                        <td>5.7 %</td>
                    </tr>
                    <tr>
                        <td>Zsugorodás hosszirányban</td>
                        <td>13.7 %</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal merőlegesen</td>
                        <td>31 MPa</td>
                    </tr>
                    <tr>
                        <td>Keménység - Rosttal párhuzamosan</td>
                        <td>69 MPa</td>
                    </tr>
                    <tr>
                        <td>Merevség</td>
                        <td>15000 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyomó szilárdság</td>
                        <td>79 MPa</td>
                    </tr>
                    <tr>
                        <td>Hajlító szilardság</td>
                        <td>125 MPa</td>
                    </tr>
                    <tr>
                        <td>Nyíró szilardság</td>
                        <td>10 MPa</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

<?php include 'templates/footer.php' ?>