<?php

    function active($feltetel, $oldalszam){
        switch (($feltetel == $oldalszam)) {
            case TRUE: echo "active"; break;
            default: echo ""; break;
        }
    }

?>