<?php

$colors=array("red ","Yellow ","blue ",12.5);

/*echo $colors[0];
echo $colors[3];*/

/*echo "<pre>";
print_r($colors);
echo "</pre>";*/

echo "<ul>";
for($i=0;$i<4;$i++){
        echo  "<li> $colors[$i] </li>";
}
echo "</ul>";



?>