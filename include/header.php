<div class="header">
	<ul>
	<li><a href="#"><img src='log.jpg' height="32px" width="32px"></a></li>
	<li><a href="index.php">Home</a></li>

<li><a href="checkout.php"n>Check Out</a></li>
<?php if(!$_SESSION['logged_in'])
{?>
<li><a href="register.php">Register</a></li>
<li><a href="signin.php">Login</a></li>
<?php } else{?>
<li><a href="logout.php">Log Out</a></li>
<?php }?>	



	<?php if($_SESSION['logged_in']!="")
	{?>
	<li><a><span>Welcome!,</span> <?php echo $_SESSION['username'];?></a></li>
<?php } ?>


</ul>
</div>