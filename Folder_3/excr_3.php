<?php
$classes = array ( 
'Monday' => 'HTML', 
'Tuesday' => 'PHP', 
'Wednesday' => 'Project', 
'Thursday' => 'JavaScript', 
'Friday' => 'Database', 
); 
// Print each key and value: 

echo "<table border='1' style='border-collapse: collapse' width='250px'>";

echo "<tr>";
echo "<th>Index/key</th>";
echo "<th>Value</th>";
echo "</tr>";

foreach( $classes as $key => $value){
    echo "<tr>
    	  <td>$key</td>
          <td>$value</td>
          </tr>";
}

echo "</table>"
?>