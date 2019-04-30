<?php
	include("config.php");
	$Sqlquery = "SELECT Images from tbl_scanned_images";
	$result = mysqli_query($conn,$Sqlquery) 
		

?>
<head>
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

	</style>
	<title>Untitled Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script>
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
<html>
	<body>
		<div id="content">
  			<?php
    			while ($row = mysqli_fetch_array($result)) 
    			{

    				echo "<div class='imgItem' >";
    					echo "<div id='imgZoom'>"; // for image hoveing & zooming this div was made 
					
							echo "<a href='upload/".$row['Images']."'><img  class='imgzoom' style='width:200px;height:250px;border:1px solid grey;' src='upload/".$row['Images']."'/> </a>";
						echo "</div>";
					echo "</div>";
    			}
	  		?>
	</body>
</html>