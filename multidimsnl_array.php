<?php

$emp =[
    [1,"Krishna","Manager",500000],
    [2,"Selmon","Salesman",70000],
    [3,"Monu","Computer operator",60000],
    [4,"Kuku","Driver",7000],
];

echo "<table border='2px' cellpadding='5px'>";
echo "<tr>
       <th>Emp. Id</th>
       <th>Emp. Name</th>
       <th>Designation</th>
       <th>Salary</th>
     </tr>";
foreach($emp as $v1){
     echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>"  ;
    }
    echo "</tr>";
}
echo "</table>";


/*for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        echo $emp[$i][$j] ."  ";
    }
    echo "<br>";
}*/

/*echo $emp[0][0] ." ";
echo $emp[0][1] ." ";
echo $emp[0][2] ." ";
echo $emp[0][3] ." ";
echo "<br>";
echo $emp[1][0] ." ";
echo $emp[1][1] ." ";
echo $emp[1][2] ." ";
echo $emp[1][3] ." ";
echo "<br>";
echo $emp[2][0] ." ";
echo $emp[2][1] ." ";
echo $emp[2][2] ." ";
echo $emp[2][3] ." ";
echo "<br>";
echo $emp[3][0] ." ";
echo $emp[3][1] ." ";
echo $emp[3][2] ." ";
echo $emp[3][3] ." ";
echo"<br>";
*/

/*echo "<pre>";
print_r($emp);
echo "</pre>";*/

?>