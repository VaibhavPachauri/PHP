<?php
//multidimensional array with list() function.
$emp =[
    [
        "a"=>1,
    "b"=>"Krishna",
    "c"=>"Manager",
    "d"=>500000
    ],
    [
      "a"=>2,
      "b"=>"Selmon",
      "c"=>"Salesman",
      "d"=>70000
    ],
    [
      "a"=>3,
      "b"=>"Monu",
      "c"=>"Computer operator",
      "d"=>60000
    ],
    [
      "a"=>4,
      "b"=>"Kuku",
      "c"=>"Driver",
      "d"=>7000
    ],
    [
        "a"=>5,
        "b"=>"Ravi",
        "c"=>"Driver",
        "d"=>5000
      ]
];


echo "<table border='1px' cellpadding='7px'>
<tr>
       <th>Emp. Id</th>
       <th>Emp. Name</th>
       <th>Designation</th>
       <th>Salary</th>
     </tr>";

foreach($emp as list("a"=>$a,"b"=>$b,"c"=>$c,"d"=>$d)){              //list() function eliminates the need of nested loops.
     echo "<tr><td>$a</td>  <td>$b</td>  <td>$c</td>  <td>$d</td></tr>";
}
echo "</table>";

?>