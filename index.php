<?php
session_start();
  include 'config.php';


if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset(_SESSION['id']))
{
         
	header('Location:login.php');
}
//else
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 5px;}
}
.icon
{
  width: 1em;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  }
  #map
{
	width:100%;
}
.imgItem
	{
	margin:auto;
	width:80%;
	height:15em;
	overflow:hidden;
	}
	.imgzoom
	{
		transform:scale(1,1);
		transition:1s;
	}
	.imgzoom:hover
	{
		
		transform:scale(1.5,1.5);
		transition:1s;
		
	}

	.navbar .nav li>a
	{
		color: white;
		z-index:1;
	}
	
	.navbar-default
	{
		background: #583f7f;
	}
	nav select {
  display: none;
}
.parallax1 {
    /* The image used */
    background-image: url('10.jpg');

    /* Full height */
    height: 400px; 
	
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
	opacity:0.5;
}
.parallax2 {
    /* The image used */
    background-image: url('10.jpg');

    /* Full height */
    height: 400px; 
	
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
	opacity:0.5;
}
</style>
<script>
	$(document).ready(function()
	{
		//home
    	$("#home").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Home').offset().top
		    }, 1000);
    	});
		
		//Gallery
		$("#gallery").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Gallery').offset().top
		    }, 1000);
    	});
		
		//staff
		$("#staff").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Staff').offset().top
		    }, 1000);
    	});
		
		
		window.onscroll = function()
		{
			var mynav = document.getElementById("n1");
			if(document.body.scrollTop>=200)
			{
				mynav.classList.add("navbar-inverse");
				mynav.classList.remove("navbar-default");
			}
			else
			{
				mynav.classList.add("navbar-default");
				mynav.classList.remove("navbar-inverse");
			}
		}
});
$(document).ready(function() {
    	$(".imgzoom").click(function(){
			var source = this.src;
			$(".picview").attr('src', source);
			$('body').css("overflow","hidden");
			$("#view").fadeIn(700);
			
		});
		$("#close").click(function(){
				$('body').css("overflow", "visible");
				$("#view").fadeOut();
			});
		
		
});
</script>
</head>
<body>

		
 <div id="Home">
	<nav id="n1" class="navbar navbar-default rnav navbar-fixed-top anc ">

 		 <div class="container-fluid">
   			 <div class="navbar-header">
     			<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <a href="ScanImage.php" ><img src="link.png"class="icon"/>Scan Images</a>
  <a href="upload.php" ><img src="link.png"class="icon"/>Upload Images</a>

  <!--<a href="ocr.php" ><img src="link.png"class="icon"/>Convert Image To Text</a>
  <a href="#" ><img src="link.png"class="icon"/>Customer Forms</a>
  
  <a href="#" ><img src="link.png"class="icon"/>View Latest Records</a>
  <a href="#" ><img src="link.png"class="icon"/>logout</a>-->
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <b style="color: white">DC&P</b></span>
   			 </div>


   			 <ul class=" navbar-right navbar-nav nav ">
    			<li><a id="home" href="index.php">Home</a></li>		
        		<li><a href="logout.php">Logout</a></li>
            <li><a href="">Ramen Ali</a></li>
   			 </ul>
             
            	 
  
 		 </div>
	</nav>
</div>


  <div>
      <img src="2.jpg" height="500px" width="100%" id="im"/>
    </div>
    <div class="centered"><h1><b>Data Collection & Processing</b></h1></div>
   <div class="parallax1"></div>
   
    
    
    <h1  id="Gallery" align="center">Tutorial</h1>
    
    <div class="row">
      <div class="col-sm-4 " >
          <div class="imgItem" >

                <img class="imgzoom" src="1.png" style=" height:100%; width:100%" />
      </div>
        </div>
        <div class="col-sm-4">
          <div class="imgItem">
                <img  class="imgzoom" src="3.png" style=" height:100%; width:100%"  />
      </div>
        </div>
        
        <div class="col-sm-4">
          <div class="imgItem">
                <img class="imgzoom" src="99.png" style=" height:100%; width:100%" />
      </div>
        </div>
    </div>
    
    <br/>
    
    <div class="row">
      <div class="col-sm-4">
          <div class="imgItem">
                <img class="imgzoom" src="6.png" height="100%" width="100%"/>
      </div>
        </div>
        
        <div class="col-sm-4">
          <div class="imgItem">
                <img class="imgzoom" src="2.png" height="100%" width="100%" />
      </div>
        </div>
        
        <div class="col-sm-4">
          <div class="imgItem">
                <img class="imgzoom" src="10.png" height="100%" width="100%"/>
      </div>
        </div>
    </div>
    

  <div class="parallax2"></div>
    <!-- Modal -->
<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115631.31845001537!2d66.93918815820314!3d25.085652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3429afcf1836b%3A0x336aa33d7030e57!2sHamdard+University!5e0!3m2!1sen!2s!4v1546802203456" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 

<?php	
}
$sqlQuery="";
?>