<?php
$items = array(
array("image" => "rabbit", "id" => "1", "desc"=> "rabbit tapestry", "price" => 111.90), 
array("image" => "dragon", "id "=> "2", "desc" => "dragon tapestry", "price" => 99.99), 
array("image" => "snake", "id" => "3", "desc" => "snake tapestry", "price" => 123.45), 
array("image" => "horse", "id" => "4", "desc" => "horse tapestry", "price" => 101.50)); 

$photos = array('rabbit','dragon','snake','horse');

echo "<table border='1'>";

echo "<tr>";
echo "<th>Photo</th>";
echo "<th>Item</th>";
echo "<th>Price</th>";
echo "<th>Action</th>";
echo "</tr>";


foreach($items as $item){
    echo "<tr>
    <td><img src='images/$item[image].jpg'></td>
    <td> $item[desc] </td>
    <td> $$item[price] </td>
    <td>buy</td>
    </tr>";
}
 

echo "</table>"


?>

