<!DOCTYPE html>
<html>
<body>
    


<?php
$getallen = array("3","21","46","47","676","5345","78657");
print_r($getallen);

$laag_hoog = $getallen;

asort($laag_hoog);
echo "<pre>";
print_r($getallen = $laag_hoog);
echo "</pre>";


$hoog_laag = $getallen;

arsort($hoog_laag);
echo "<pre>";
print_r($getallen = $hoog_laag);
echo "</pre>";

?>





</body>
</html>