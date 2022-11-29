<?php

//associative array is a key-value array.

$age = array(
    "bill"=>25,
    "steve"=>45,
    "elon"=>22
);

echo $age["steve"] ."<br>";
echo $age["bill"] ."<br>";
echo $age["elon"] ."<br>";

$ag =[                                    //another way to declare associative array.
    1=>27,
    "billu"=>49,
    3=>26
];

$ag[1] ="hi!";        //a way to change the value of the key.

echo "<pre>";
var_dump($ag);         //tells datatype of values.
echo "</pre>";

echo $ag[1] ."<br>";
echo $ag["billu"] ."<br>";
echo $ag[3] ."<br>";

?>