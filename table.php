<?php

/**
 * print a table with php tags  and print series 
 */

 echo "<table align='center' border='1px solid' width:'100%'> 
 <tr >
 <th >first
 </th>
 <th>second</th>
 <th>Multiply </th>
 </tr>";
 for($i=1; $i<=10  ;$i++){
    echo "<tr >";  
    for($j=1; $j<=10  ;$j++){
   
  echo "<td> $i </td>";  
  echo "<td> $j </td>";  
  $ans =$i*$j;
  echo "<td>" .$ans. "</td>";  

    echo "</tr>";  
    }

    echo "\t";
 }

echo "</table>";