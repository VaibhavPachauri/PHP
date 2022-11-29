<?php

/*functions in array:-
1.  array_merge() --> merges two indexed or associative array.
2.  array_merge_recursive() --> merges multidimensional associative array.
3.  array_combine() -->  merges indexed array only.
*/

$fruit = array('orange ','banana','apple');
$veggie= array('carrot','pea');
$color= array('green','red');

$newArray = array_merge($fruit,$veggie,$color);
echo "<pre>";
print_r($newArray);
echo "</pre>";

$f = array('a'=>'ore ','b'=>'ana','c'=>'app');
$v= array('c','p');

$newArray1 = array_merge($f,$v);
echo "<pre>";
print_r($newArray1);
echo "</pre>";

$ft = array('a'=>'ore ','b'=>'ana','c'=>'app');
$vg= array('d'=>'c','e'=>'p');

$newArray2 = array_merge($ft,$vg);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

$ftu = array('a'=>'ore ','b'=>'ana','c'=>'app');
$vgg= array('b'=>'c','e'=>'p');

$newArray3 = array_merge($ftu,$vgg);
echo "<pre>";
print_r($newArray3);
echo "</pre>";


?>