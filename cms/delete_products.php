<?php 
$con=mysqli_connect('localhost','root','','beauty_spot');
$product_id=$_GET['id'];
$query="DELETE FROM product WHERE id=$product_id";
$res=mysqli_query($con,$query);
header("location:products.php");	
 ?>