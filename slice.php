<?php

$color=["red","orange","green"];

$newArray = array_slice($color,1,2);

echo "<pre>";
print_r($newArray);
echo "</pre>";


//array_splice() --> adds the elements at the wished places

$color1 = ["red ","orange ","green ","yellow "];
$fruit= ["blue ","black "];

array_splice($color1,2,0,$fruit);
echo "<pre>";
print_r($color1);
echo "</pre>";

?>