<!DOCTYPE html>
<html>
<body>
    


<?php
$getallen = array("3","46","78657","47","676","5345","21");
print_r($getallen);

$hoog_laag = $getallen;

asort($hoog_laag);
print_r($getallen);

$laag_hoog = $getallen;

arsort($laag_hoog);
print_r($getallen);
?>





</body>
</html>