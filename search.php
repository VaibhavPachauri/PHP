<?php
/*search in array:-
1.    in_array() --> gives only two result either 1 or 0 where, 1-->true, 0-->false.
2.    array_search() --> returns the index or key, if array--> indexed array-->returns index value 
                                                   if array--> associative array-->returns key value.*/  

$food = array('orange','apple','grapes','55','melon');

//echo in_array('lime',$food);
/*if(in_array(55,$food,true)){      //finds the exact match of the value to be searched.
    echo "found";
}else{
    echo "not found";
}*/

/*$a=array(array('p','h'),array('p','r'),'0');

if(in_array(array('p','k'),$a,true)){      //finds the exact match of the value to be searched.
    echo "found";
}else{
    echo "not found";
}*/

echo array_search('grapes',$food) ."<br>";

$f=array('a'=>'org','b'=>'log','c'=>'ant','d'=>'rog','e'=>'wee',);
echo array_search('ant',$f);

?>