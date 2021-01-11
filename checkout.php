	<?php
	include('include/head.php');
	include('include/header.php');
	include('include/nav.php');

	?>
	<style>
			.order_section{
background:#fff;
width:800px;
margin:auto;
height:150px;
padding:10px;
border-bottom:1px solid gray;

}



	</style>
	<h2 align="center">Ordered Products</h2>
	<?php


if(($_SESSION['order_id']!=""))
{

	$total_bill=0;

$item_name="";  
$item_num="";
$order_id=$_SESSION['order_id'];
$idd=$_GET['product_id'];
mysqli_query($con,"delete from cart where product_id=$idd and order_id='$order_id'");

$query=mysqli_query($con,"SELECT * FROM product INNER JOIN cart ON cart.product_id=product.id WHERE cart.order_id='$order_id'");
while($row=mysqli_fetch_assoc($query))
{
$total_bill=$total_bill+$row['product_price']*$row['product_qty']."<br>";
$item_name.=$row['product_name']."<br> ";
$item_num.=$row['product_id'].",";

?>
	<div class="order_section">
		<img src="images/<?php echo $row['product_image'];?>" style="width:200px; height:150px;float:left">
		<a href='checkout.php?product_id=<?php echo $row['product_id'];?>' style="float:right;">x</a>
			<h4>Product Name: <?php echo $row['product_name'];?></h4>
			<h5>Price:<?php echo $row['product_price'];?></h5>
			<p>
				Quantity:<?php echo $row['product_qty'];?>
			</p>


	</div> 
  <?php }?>
<div class="order_section">
	<div style="text-align:center;font-size:25px">
	<?php echo "Total Bill Rs".$total_bill;echo $item_name;?>

	<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
		    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
      <input type="image"
src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif"
border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif"
width="1" height="1">
    </form>

	</form>


</div>
</div>

 <?php} ?> 
 <?php }?> 
 <?php if($_SESSION['order_id']=="")
 {
 ?>	
 
<div class='order_section'>
<h2>You have not added any product</h2>
</div>

<?php }?>		
	<!--this is the footer of this page-->
	<?php include('include/footer.php');?>
	</body>
	</html>



