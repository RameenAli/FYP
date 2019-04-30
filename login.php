<?php
   session_start();
   include'config.php';
   $msg="";
if (isset($_SESSION['email']) && isset ($_SESSION['password']))
{
	header("location:index.php");
}
   elseif(isset($_POST['email'])&& isset($_POST['pass']))
	{  
		if(!empty($_POST['email'])&& !empty($_POST['pass']))
     	{
        	$email = $_POST['email'];
       		$pass =  $_POST['pass'];

			$result=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email'&& password='$pass'");

      		 
  			 if($rows=mysqli_fetch_array($result))
      		 {
      	   		

   				 $row=mysqli_fetch_array($res);
			     $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
				 $_SESSION['email']=$email;
				 $_SESSION['password']=$password;
				 $_SESSION['id'] = $rows['ID'];

               	 header("location:index.php");
			}
		else
			{
				$msg="Invalid email or password";
			}
	}
	else
	{
		$msg="Please fill all the fields";
	}
     
}
 ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  html { width: 100%; height:100%; overflow:hidden; }

body { 
	color:#FFF;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);

}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
.navbar .nav li>a
	{
		color: white;
		z-index:1;
	}
	
	.navbar-default
	{
		background: #0C6;
	}
	
  </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>


<h2 style="text-align:center"> <b>DATA COLLECTION AND PROCESSING <b></h2>
  <div class="login">	
<h1>Login</h1>
<h6>    <a href="Signup.php" style="color:white">Sign up Here</a></h6>
    <form method="post">
    	<input type="email" name="email" placeholder="email"  />
        <input type="password" name="pass" placeholder="Password"  />
         <p><?php echo $msg;?></p>
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
          
        
    </form>
   </div>
</body>
</html>













