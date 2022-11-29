<?php
function function_name(){
            echo "Statement .<br> ";
}
function_name();

function sum($a,$b){                         //parameterized function.
     echo $a+$b;
}
sum(1,2);
function hello($fname="First", $name1="Last"){              //parametrized function with default value.
    echo "Hello $fname $name1 .<br>";                       //if no value inserted in the function 
}                                                           //then default value gets executed.
hello();
?>