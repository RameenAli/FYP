<?php
session_start();
include 'config.php';
$msg="";
if(isset($_POST['email'])&& isset($_POST['password']))
{ if(!empty($_POST['email'])&& !empty($_POST['password']))
  { 
  		$email= $_POST['email'];
	    $password= $_POST['password'];
	    $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $description= $_POST['description'];
       
        $sql="SELECT*FROM tbl_user WHERE  email='$email' ";//check that if this user email exist already or not

       $result=mysqli_query($conn,$sql);
       if($row= mysqli_fetch_array($result))

       {
				$msg= "Username already exist";
	   }
       
        else
        {
          if(!isset($SESSION['email']) && !isset($SESSION['password']))
          {
          	$query="INSERT tbl_user(ID,FIRSTNAME,LASTNAME,EMAIL,PASSWORD,DESCRIPTION) VALUES (NULL,' $firstname', '$lastname','$email','$password','$description')";

          	$result=mysqli_query($conn,$query);
          	
        	if($result)
          	{
              echo "ok";
              $msg="Signup Successful";
              header('location:login.php');
          }



          }


        }





  }
  
   
else { $msg="please fill all the fields";
 
     }

}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SignUp Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>

body { 
	color:#FFF;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}


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

<h2 style="text-align: center"><b>DATA COLLECTION AND PROCESSING<b></h2>
  <div class="login">
<h2>Sign Up</h2>
     <h6><a style="color:white" href="login.php">Click to Login</a></h6>
    <form method="post" action="#">

 <input type="text" name="firstname" placeholder="firstname" required />
  <input type="text" name="lastname" placeholder="lastname"  />
  <input type="email" name="email" placeholder="email"  required/>
  <input type="password" name="password" placeholder="password" required />
       
        <p><?php echo $msg;?></p>
       <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        
        
       </form>
       </div>
        </body>
        </html>

