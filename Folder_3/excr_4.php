<?php
$items = array(
    array('id' => '1', 'desc' => 'rat tapestry', 'price' => 111.90), 
array('id' => '2', 'desc' => 'dragon tapestry', 'price' => 99.99), 
array('id' => '3', 'desc' => 'snake tapestry', 'price' => 123.45), 
array('id' => '4', 'desc' => 'horse tapestry', 'price' => 101.50)); 
?>
<table border="1">
<thead>
<tr>
<th>Item </th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($items as $item): ?>
<tr>
<td><?php echo $item['desc']; ?></td>
<td>
$<?php echo number_format($item['price'],2); ?>
</td>
<td>
<p>buy</p>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>