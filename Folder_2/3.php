<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>No. of Pies</th>";
echo "<th>Price</th>";
echo "</tr>";
for ($row = 1; $row < 6; $row ++) {
   echo "<tr>
   		<td>".$row."</td>";
   		for ($col = 1; $col < 2; $col ++) {
        	echo "<td>", $row *5,"</td>";
   }
  		echo "</tr>";
}
echo "</table>";
?>