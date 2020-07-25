<?php
include("Batiment.class.php");
include("Maison.class.php");
include("Adresse.class.php");

$adrss = new Adresse(34,"rue blublu", "59160", "BluCity");
$maison = new Maison($adrss, 600, 6);

echo $maison;