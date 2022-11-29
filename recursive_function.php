<?php

function display($num){
     if($num<=5){
        echo "$num <br>";
        display($num +1);
     }
}
display(1);

function factorial($n){
    if($n==0){
      return 1;
    }else{
        return($n*factorial($n-1));
    }
}
echo factorial(5);



?>