<!DOCTYPE html>
<html>
<body>
    
<?php
 $voornaam = "string";
 echo gettype($voornaam);
 echo "<br>";

 $x = 5985;
 echo gettype($x);
 echo "<br>";

 $x = 10.365;
echo gettype($x);
echo "<br>";

$x = true;
$y = false;
echo gettype($x);
echo "<br>";

$x = "Hello world!";
$x = null;
echo gettype($x);


 ?>



</body>
</html>