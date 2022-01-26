<?php
function mijnNaamIsGroot(){
    $voornaam = " metekaan ";
    $achternaam = " sariguney ";
    $helemaal = " Mijn naam is " . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>