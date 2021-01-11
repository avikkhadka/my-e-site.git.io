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

		$query="SELECT * FROM product where product_cat='Brushes' ORDER BY product_name DESC limit 8";
		$run=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($run))
		{
 ?>
<div class="single_product text-center">
	<img src="images/<?php echo $row['product_image'];?>">
		<b><?php echo $row['product_name'];?></h4>
	<b>Product Price:<?php echo $row['product_price'];?>/- </b>
	<b>
		<br>
<a href="index.php?product_id=<?php echo $row['id'];?>">Add to Cart</a>

	</b>
</div>
<?php } ?>
</div>
<!--this is the footer of this page-->
<?php include('include/footer.php');?>
</body>
</html>
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
