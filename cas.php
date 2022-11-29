<?php

$food = array('orange ','banana','apple');
/*echo count($food);                            //tells the no. of items in the array
echo sizeof($food);                           //tells the no. of items in the array*/  

/*$food = array(
                 'fruits'=> array('orange ','banana','apple'),
                 'veggie'=> array('carrot','collard','pea')
);

echo count($food,1);          //count(array,mod)  mod has only twwo values 0 & 1 
                              //if inserted 1 it gives the count of all the numbers/elements in the sub array too.

echo count($food['fruits'],1);   //gives the count of fruit array elements.*/  

/*$len = count($food);
                                        //use of count for displaying elements of the array.
for($i=0;$i<$len;$i++){
    echo $food[$i] ."<br>";
}*/

echo "<pre>";
print_r(array_count_values($food));         //it does not return any value but, returns an array.
echo "</pre>";


?>