<?php

$age = [
    "red"=>24,
    "green"=>34,
    "blue"=>45,
 ];
echo "<ul>";  
foreach($age as $key => $value){
    echo "<li> $key  = $value </li>";
} 
echo "</ul>";

?>