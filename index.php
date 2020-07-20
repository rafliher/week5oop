<?php
    require_once('Harimau.php');
    require_once('Elang.php');

    $heri = new Harimau('heri');
    $heri->getInfoHewan();
    $heri->atraksi();

    $eli = new Elang('eli');
    $eli->getInfoHewan();
    $eli->atraksi();

    $eli->serang($heri);
    $heri->getInfoHewan();

    $heri->serang($eli);
    $eli->getInfoHewan();

?>