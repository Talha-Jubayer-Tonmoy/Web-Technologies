<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
<H1>DISPLAY</H1>
<table>
	<thead>
		<tr>
			<th> Name </th>
			<th> Buying Price </th>
			<th> Selling Price </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
		        <td><?php echo $product['buyingprice'] ?></td>
		        <td><?php echo $product['sellingprice'] ?></td>
		        <td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>