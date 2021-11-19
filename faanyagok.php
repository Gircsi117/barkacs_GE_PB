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
            <p class="text-start ps-3">Sokféleképpen hasznosítható, jól alakítható keményfa. Az egyenes szálú, nagy átmérőjű rönkökből sokféle félkésztermék állítható elő. Minden szerszámmal jól megmunkálható: késeléssel, hámozással furnér készíthető belőle. Gőzöléssel jól hajlítható, a hajlított (például thonet) bútorok gyártásának legfontosabb alapanyaga. Gőzölés nélkül könnyen vetemedik. Nem időjárásálló; külső térben gombák és rovarok is károsíthatják. Rajzolata jellegtelen, ezért felületét gyakran páccal, színezéssel, festéssel kezelik. Papír, farost, faszén és berimbau gyártására/készítésére is kiválóan alkalmas. Magas hőmérsékleten ég, a régi fazekasság kedvenc tüzelőanyaga volt.</p>
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
            <p class="text-start ps-3">Szíjácsa keskeny, sárgás vagy halvány vöröses, gesztje világos vörösesbarna, barnás-zöldes csíkoltsággal. A csíkok a korai pásztában jelentkeznek. Az edények a korai pásztában sűrűek, likacsgyűrűt alkotnak, de a késői pásztában szórtan helyezkednek el. Bélsugarai kicsik, szabad szemmel csak a sugármetszeten láthatók vékony csíkok formájában. Könnyen és jól szárítható kis hajlammal a vetemedésre. Minden szerszámmal jól és könnyen megmunkálható. Gőzölve jól hajlítható. Jól szegelhető, csavarozható. Jól ragasztható. Gyakran pácolják, a vöröses tónust kihangsúlyozva „tüzesítik”. Jól lakkozható. Nem időjárásálló.</p>
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
            <p class="text-start ps-3">A szíjács világosszürke, széles, igényes célra nem használatos, a geszt sötétszürke, szabálytalanul futó sötét csíkokkal, gőzölés után szép sötétbarna színűvé válik. Edényei szemmel láthatóak, nagyok, ritkák, szórt elrendezésűek. Bélsugarai szabad szemmel alig láthatók, a sugármetszeten kis tükrökként jelentkeznek. Könnyen, problémamentesen szárítható, csak a gyökéranyagnál és a rovarszúrás okozta erezeti csomóknál keletkezhetnek kisebb repedések. Használat közbeni stabilitása közepes. Minden szerszámmal jól és könnyen megmunkálható, jól késelhető, hámozható. Gőzölve jól hajlítható. Jól szegelhető, csavarozható. Jól ragasztható. A lúgos enyvek csersavfoltokat okozhatnak. Szépen csiszolható, pórustömítéssel jól lakkozható. Nagy zsír- és viasztartalma miatt egyes lakkféleségek felhordása előtt a felületet semlegesíteni kell. A geszt mérsékelten tartós.</p>
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
            <p class="text-start ps-3">A szíjács fehéres, szürkés, 2,5 – 5 cm vastag, nem használják, a geszt színe sárgástól vörösesbarnáig terjed, utánsötétedik. A textúra a váltakozóan csavarodó növés miatt a megvilágítástól függően fénycsíkokat mutat, aranyszínűen fénylik. A pórusok szabad szemmel jól, a bélsugarak kevésbé láthatók. Jól, gyorsan szárítható, nem reped, nem vetemedik. Felhasználás közbeni stabilitása jó.Kézi és gépi szerszámokkal egyaránt a legjobban megmunkálható faanyagok egyike. Jól fűrészelhető, késelhető, hámozható, faragható, de éles szerszámot igényel. Közepesen hajlítható.l szegelhető, csavarozható, jól ragasztható, a lúgos ragasztók foltot okozhatnak.Kiválóan csiszolható, lakkozható, kis pórustömítést igényel.Gomba- és rovarálló, időjárásálló.</p>
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
            <p class="text-start ps-3">A kocsányos és a kocsánytalan tölgy anyaga szemre nagyon hasonlít egymásra, de a kocsánytalan tölgy átlagban kissé sűrűbb, keményebb, durvább rostú. A szíjács keskeny, sárgásfehér, a geszt sárgásbarna. Gyűrűs likacsú fa. Nagy, kerek edényei jól láthatóak, a keresztmetszeten a korai pásztában az évgyűrűhatár mentén egy (kocsányos tölgy) vagy több (kocsánytalan tölgy) sorban helyezkednek el. A késői pászta felé gyors átmenettel szűkülnek, és sugárirányú sorokba rendeződnek, a kocsánytalan tölgynél néhol villásan elágazó mintázatot alkotnak. Különböző vastagságú bélsugarai vannak, ezek sárgás színűek, a nagyobbak elég feltűnőek. A bélsugarak a húrmetszeten sötét, akár 6 cm-es vékony hosszanti vonalak, a sugármetszeten szabálytalan alakú, különböző méretű fényes, barnás csíkok formájában tűnnek fel. <br><br> Lassan, kíméletesen kell szárítani, hajlamos a repedezésre. A csavarodott növésű fa vetemedhet, teknősödhet.Minden eljárással jól megmunkálható. Közepesen faragható. Csak gőzölés után késelhető, hámozható. Gőzölve hajlítható.Nehezen szegezhető, csavarozható. Hidegen jól, melegen problémásan ragasztható.Jól pácolható, pórustömítéssel jól lakkozható.A geszt általában gombaálló, a szíjácsot rovarok károsítják. Élettartama szabadban kb. 85 év, vízben kb. 500 év, állandóan szárazon kb. 800 év.</p>
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