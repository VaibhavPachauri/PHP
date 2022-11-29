<?php

/*four new function of array:-
1.  pop() --> deletes the value of an array.
2.  push() --> adds the value at the last of an array.
3.  array_shift() --> deletes the first value of array.
3.  array_unshift() --> adds new value to the first value of array.
*/

$fruit = ["orange","apple","melon","grapes"];

array_pop($fruit);           
echo "<pre>";
print_r($fruit);
echo "</pre>";

array_push($fruit,"Pomegranate","Guava");
echo "<pre>";
print_r($fruit);
echo "</pre>";

array_shift($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";

array_unshift($fruit,"Dates","Black Grapes");
echo "<pre>";
print_r($fruit);
echo "</pre>";


?>