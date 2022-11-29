                                           /*Functions with Return value */.<br>
<?php
function hello($fname="First", $name1="Last"){              //parametrized function with default value.
    $v = "Hello $fname $name1 .<br>";     
    return $v;                  //if no value inserted in the function 
}                                                           //then default value gets executed.
$name=hello("yahoo","Ji");
echo $name;

function sum($math, $eng, $sc){
    $s = $math+$eng+$sc;
    return $s;
}
function percentage($st){
    $per = ($st/3)*100;
    echo $per ."%";
}

$total =sum(45,95,80);
echo $total ."<br>";
percentage($total);
?>                                           