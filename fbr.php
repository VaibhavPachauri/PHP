                            //Function by refrence<br>
<?php
function testing(&$string){                            //& --> address of $string
            $string .=" and something extra<br>";         //it adds directly at the address,therefore string gets altered.
}

$str ="This is a string";
testing($str);
echo $str;

function first($num){
    $num +=5;
}
function second(&$num){
    $num +=5;
}

$number = 10;
first($number);
echo "Original value is $number<br>";

second($number);
echo "Original value is $number<br>";



?>                           