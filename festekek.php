<?php $cim = "Festékek"; $sorszam = 2; include 'templates/header.php' ?>

<?php include 'templates/menu.php' ?>

<?php
    $szinnev = ["Abszintzöld", "Acélkék", "Áfonyakék", "Áfonyavörös", "Agyagszín", "Akáclila", "Akvamarinkék", "Almazöld", "Angyalszőke", "Anilinkék", "Aranyokker", "Aranysárga", "Bronzvörös", "Búzasárga", "Cédruszöld", "Chilivörös", "Ciklámenszín", "Hínárzöld", "Holdezüst", "Homokszín", "Zsetfekete", "Rubinvörös", "Sajtsárga"];

    $szinkod = ["#3DB42E", "#9ABFCF", "#6A7DB8", "#B21827", "#827C69", "#CFB0F2", "#C4F6F7", "#CFF6AB", "#FFF1CF", "#6090C0", "#D18C03", "#FBE996", "#934B28", "#FAD27B", "#5D9A7C", "#F11914", "#EB73EB", "#7BB45E", "#EFEFF9", "#CCC3BA", "#151516", "#BE184F", "#F6EAA5"];

    $filter = [
        "filter: invert(58%) sepia(12%) saturate(3223%) hue-rotate(67deg) brightness(99%) contrast(77%)",
        "filter: invert(88%) sepia(8%) saturate(1423%) hue-rotate(167deg) brightness(86%) contrast(87%)",
        "filter: invert(50%) sepia(21%) saturate(927%) hue-rotate(188deg) brightness(94%) contrast(84%)",
        "filter: invert(17%) sepia(79%) saturate(2968%) hue-rotate(340deg) brightness(88%) contrast(101%)",
        "filter: invert(50%) sepia(24%) saturate(240%) hue-rotate(8deg) brightness(93%) contrast(97%)",
        "filter: invert(75%) sepia(35%) saturate(695%) hue-rotate(209deg) brightness(96%) contrast(97%)",
        "filter: invert(86%) sepia(35%) saturate(171%) hue-rotate(132deg) brightness(100%) contrast(101%)",
        "filter: invert(94%) sepia(10%) saturate(1127%) hue-rotate(36deg) brightness(98%) contrast(97%)",
        "filter: invert(91%) sepia(18%) saturate(609%) hue-rotate(324deg) brightness(104%) contrast(105%)",
        "filter: invert(59%) sepia(21%) saturate(903%) hue-rotate(169deg) brightness(89%) contrast(89%)",
        "filter: invert(44%) sepia(74%) saturate(1460%) hue-rotate(20deg) brightness(104%) contrast(98%)",
        "filter: invert(90%) sepia(22%) saturate(751%) hue-rotate(343deg) brightness(104%) contrast(97%)",
        "filter: invert(34%) sepia(13%) saturate(2736%) hue-rotate(335deg) brightness(93%) contrast(88%)",
        "filter: invert(100%) sepia(98%) saturate(3352%) hue-rotate(307deg) brightness(111%) contrast(96%)",
        "filter: invert(57%) sepia(11%) saturate(1140%) hue-rotate(98deg) brightness(94%) contrast(90%)",
        "filter: invert(17%) sepia(76%) saturate(5722%) hue-rotate(356deg) brightness(98%) contrast(92%)",
        "filter: invert(76%) sepia(61%) saturate(3824%) hue-rotate(254deg) brightness(97%) contrast(89%)n",
        "filter: invert(66%) sepia(10%) saturate(1634%) hue-rotate(56deg) brightness(95%) contrast(95%)",
        "filter: invert(98%) sepia(3%) saturate(2309%) hue-rotate(186deg) brightness(99%) contrast(96%)",
        "filter: invert(85%) sepia(3%) saturate(662%) hue-rotate(349deg) brightness(92%) contrast(93%)",
        "filter: invert(5%) sepia(5%) saturate(588%) hue-rotate(201deg) brightness(91%) contrast(91%)",
        "filter: invert(17%) sepia(68%) saturate(3493%) hue-rotate(324deg) brightness(91%) contrast(98%)",
        "filter: invert(84%) sepia(44%) saturate(276%) hue-rotate(4deg) brightness(104%) contrast(93%)"
    ];
?>

<div class="container mt-0 mt-sm-3 mb-0 mb-sm-3 p-3 d-flex flex-md-row flex-wrap justify-content-center"> 
    <?php
        for ($i=0; $i < count($szinnev); $i++) {
            include 'templates/festek_minta.php';
        }
    ?>
</div>

<?php include 'templates/footer.php' ?>