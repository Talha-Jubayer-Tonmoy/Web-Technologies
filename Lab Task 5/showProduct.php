<?php  
require_once 'controller/productInfo.php';

$product_db = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th> Name </th>
		<th> Buying Price </th>
		<th> Selling Price </th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product_db['name'] ?></a></td>
		<td><?php echo $product['buyingprice'] ?></td>
		<td><?php echo $product['sellingprice'] ?></td>
	</tr>

</table>


</body>
</html>