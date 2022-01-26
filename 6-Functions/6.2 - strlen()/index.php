<?php
function mijnNaamIsGroot(){
    $voornaam = " METEKAAN ";
    $achternaam = " SARIGUNEY ";
    $helemaal = " MIJN NAAM IS " . $voornaam . $achternaam;
    strtoupper($voornaam . $achternaam);
    echo $helemaal;
}

mijnNaamIsGroot();

?>