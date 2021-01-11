<?php
session_start();
$message="";
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','beauty_spot');
$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$res=mysqli_query($con,$sql);
$check=mysqli_num_rows($res);
if($check>0)
{
$row=mysqli_fetch_assoc($res);


$_SESSION['logged_in'] = 1;
$_SESSION['userid']=$row['user_id'];
$_SESSION['username']=$row['name'];			
header('location:index.php');
}
else
{
$message="Your email or password is incorrect";
}

}
?>

<title>Registration Form</title>

<style>
.signup_form{
width:500px;
height:400px;
text-align:center;
background-color:#4b6584;
border-radius:15px;
margin:0 auto;
margin-top:10px;
opacity: 0.8;
margin-top:90px; 
}	
.signup_form img{

	height:100px;
	border-radius: 15px;
	margin-top: -00px;

}
body{
margin:0 auto;
background-image:url('background_of_admin.jpg');

background-repeat:no-repeat;
background-size:100% 720px;
}
input[type='text'],input[type='password'],input[type='email'],input[type='tel']
{
height:45px;
width:300px;
font-size:20px;
border-radius:4px;
border:none;
margin-bottom:20px;
background-color:#fff;
padding-left:30px;

}
.btn-login{
padding:15px 30px;
color:#fff;
background-color:#2ecc71;
border:none;
border-radius:4px;
 
}
a{
	color:#fff;
}
body h2{
	font-style:italic;
}

}


</style>
</head>
<body>

<!--this is the Registration <FORM></FORM>--> 
<div class="signup_form">
	<img src='adminpic.png'>
<form method="POST">
	<div class='font-input'>
	<h2>
		Sign In
	</h2>
			
		<input type='text' name='email' placeholder='Enter Email' required="">

<input type='Password' name='password' placeholder='Password' required=""><br>

<input type='submit' name='submit' value='Register' class='btn-login'></td>
<br>	
</form>
<?php echo $message;?>

</div>
</div>

<!--this is the footer of this page-->


 
</body>
</html>
 