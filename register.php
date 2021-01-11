<?php
include('include/head.php');?>
<title>Registration Form</title>
<style>
.signup_form{
width:500px;
height:500px;
text-align:center;
background-color:#4b6584;
border-radius:15px;
margin:0 auto;
margin-top:50px;
margin-left: 420px;
opacity: 0.8;
}
.signup_form img{

	height:100px;
	border-radius: 15px;
	margin-top: -00px;

}
body{
margin:0 auto;
background-image:url('back3.jpg');
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






</style>
</head>
<body>
<?php 
include('include/header.php');

?>
<!--this is the Registration <FORM></FORM>--> 
<div class="signup_form">
	<img src='beautyspot.jpg'>
<form method="POST">
	<div class='font-input'>
	
		
		
		<input type='text' name='name' placeholder='Enter your Name' required="">

	
	<input type='email' name='email' placeholder='@gmail.com' required="">


<input type='tel' name='cell_no' placeholder='Enter Your Mobile Number' required="">

<input type='Password' name='password' placeholder='Password'><br>

<input type='submit' name='submit' value='Register' class='btn-login'>
<br>
</form>
<font color="white">Already Registered?</font><br>
<a href='signin.php'><font color="blue">Click Here</font></a>	

</div>
</div>

<!--this is the footer of this page-->
<?php
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$cell_no=$_POST['cell_no'];
$password=$_POST['password'];
$user_id=uniqid();


$query="INSERT INTO users(user_id,name,email,mobile_no,password) VALUES('$user_id','$name','$email','$cell_no','$password')"; 

$res=mysqli_query($con,$query);
if($res)
{
echo"Your registration has been done";
}
else
{
echo"Registration Failed";
}

}
?>



 ?>
</body>
</html>
 