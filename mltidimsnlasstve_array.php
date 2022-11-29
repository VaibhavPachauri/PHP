<?php

$marks= [
        "Krishna"=>["physics"=>90,"Chemistry"=>80,"math"=>98],
        "VK"=>["physics"=>98,"Chemistry"=>80,"math"=>98],
        "Rahul"=>["physics"=>80,"Chemistry"=>88,"math"=>98]
];

echo "<table border='3px' cellpadding='6px'>";
echo "<tr>
       <th>Student Name</th>
       <th>Physics</th>
       <th>Chemistry</th>
       <th>Maths</th>
     </tr>";
foreach($marks as $key=>$v1){
    echo "<tr>
    <td> $key </td>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";



?>