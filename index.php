	<?php
	include('include/head.php');
	include('include/header.php');
	include('include/nav.php');

	?>
	 
	<title>Online_Products</title>
	<!--this is the product section--> 


	<div class="product_section">
		<h2>Featured Products</h2>


		<?php
		//Code for pulling the data from the database

			$query="SELECT * FROM product ORDER BY product_name DESC limit 20";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_assoc($run))
			{
	 ?>
	<div class="single_product text-center">
		<img src="images/<?php echo $row['product_image'];?>">
			<b><?php echo $row['product_name'];?></h4>
		<b>Product Price:<?php echo $row['product_price'];?>/- </b>
		
			<br>
			<a href="index.php?product_id=<?php echo $row['id'];?>">Add to Cart</a>	
	</div>
	<?php } ?>

	</div>
	<!--this is the footer of this page-->
	<?php include('include/footer.php');?>

	<style>

		.single_product a{
				 background:#ff9900;		
				color:#fff;
				font-size:17px;
				padding: 2px;
				text-decoration: none;
				border-radius:5px;


		}
	}



</style>
	</body>
	</html>

<?php
if($_GET['product_id']!="")
{
$pro_id=$_GET['product_id'];
if(empty($_SESSION['order_id']))
{
$_SESSION['order_id']=uniqid();
}
$order_id=$_SESSION['order_id'];
$check_result=mysqli_query($con,"SELECT * FROM cart WHERE order_id='$order_id' and product_id='$pro_id'");
$run=mysqli_num_rows($check_result);
if($run>0)
{
$query=mysqli_query($con,"UPDATE cart SET product_qty=product_qty+1 WHERE order_id='$order_id'");
if($query)
{
echo"<script>alert('Product has been updated to your cart')</script>"; 
}

}
else
{
$query=mysqli_query($con,"INSERT INTO cart(order_id,product_id,product_qty) VALUES('$order_id','$pro_id','1')"); 
if($query===true)
{
echo"<script>alert('Product has been added to your cart')</script>";
}
} 


}

?>