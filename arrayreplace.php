<?php

/*two new functions of array:-
1.    array_replace()   -->   creates new array and replaces new value, only for index and associative array.
2.    array_replace_recursive() --> used for multidimensional associative array.
*/

$fruit = array('orange ','banana','apple');
$veggie= array('a'=>'carrot',1=>'pea');


$newArray= array_replace($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$array1= array("a"=>array("red"),"b"=>array("green","pink"));
$array2= array("a"=>array("yellow"),"b"=>array("black"));

$newArray1= array_replace_recursive($array1,$array2);

echo"<pre>";
print_r($newArray1);
echo"</pre>";

?>