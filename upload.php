<?php
		include("config.php");

		if(isset($_POST['submitform']))
		{
			$dir="upload/";
			$image=$_FILES['uploadfile']['name'];
			$temp_name=$_FILES['uploadfile']['tmp_name'];

			if($image!="")
			{
				if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

				$fdir= $dir.$image;
				move_uploaded_file($temp_name, $fdir);
			}
//$sql = "INSERT INTO images (image,createddate,user_id) VALUES ('$image','$timestamp','".$_SESSION['id']."')";
				$query="insert  into tbl_scanned_images(id,emp_id,customer_Account,Images) values (Null,1,2387648,'$image')";
				mysqli_query($conn,$query) or die(mysqli_error($conn));
				
				echo "<p style='position: absolute;top: 450px;left: 550px; color:#37b9e5'><b>File Uploaded Suucessfully</b></p>";

		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="ocrad.js"></script>
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
                .sidenav {
                    padding-top: 15px;
                }
                .sidenav a {
                    font-size: 5px;
                }
            }
            
            .icon {
                width: 1em;
            }
            .navbar .nav li>a {
                color: white;
                z-index: 1;
            }
            
            .navbar-default {
                background: #583f7f;
            }
            
            nav select {
                display: none;
            }
            
            .search-container input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }
            
            .search-container button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }
            
            .search-container button:hover {
                background: #0b7dda;
            }
            
            .search-container::after {
                content: "";
                clear: both;
                display: table;
            }
            </style>
            <script>
            $(document).ready(function() {
                //home
                $("#home").click(function() {
                    $('html, body').animate({
                        scrollTop: $('#Home').offset().top
                    }, 1000);
                });

                window.onscroll = function() {
                    var mynav = document.getElementById("n1");
                    if (document.body.scrollTop >= 200) {
                        mynav.classList.add("navbar-inverse");
                        mynav.classList.remove("navbar-default");
                    } else {
                        mynav.classList.add("navbar-default");
                        mynav.classList.remove("navbar-inverse");
                    }
                }
            });
            $(document).ready(function() {
                $(".imgzoom").click(function() {
                    var source = this.src;
                    $(".picview").attr('src', source);
                    $('body').css("overflow", "hidden");
                    $("#view").fadeIn(700);

                });
                $("#close").click(function() {
                    $('body').css("overflow", "visible");
                    $("#view").fadeOut();
                });

            });

            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
</head>
<body>
 <div id="Home">
            <nav id="n1" class="navbar navbar-default rnav navbar-fixed-top anc ">

                <div class="container-fluid">
                    <div class="navbar-header">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="ScanImage.php"><img src="link.png" class="icon" />Scan Images</a>
                            <a href="upload.php" ><img src="link.png"class="icon"/>Upload Images</a>
                            
                           
                        </div>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <b style="color: white">DC&P</b></span>
                    </div>

                    <ul class=" navbar-right navbar-nav nav ">
                        <li class="search-container">
                            <form action="">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li><a id="home" href="index.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="">Ramen Ali</a></li>

                    </ul>

                </div>
            </nav>
        </div>
        <br>
        <br>
        <!--....................................Upload ka kaam.............................................-->
			<div style="width: 40%; text-align: center;border: 10px inset #37b9e5; margin-left: 400px;margin-top:100px">
						<h1 style="color:#37b9e5">Image Upload</h1>

						<form action="" method="post" enctype="multipart/form-data">
							
							<p style="color:#37b9e5"><b>Upload Images/File :</b></p> <input type="file" name="uploadfile" class="btn btn-info" style="text-align: center;margin-left: 100px"">

						   </br>
						   
						    <button type="submit" name="submitform" class="btn btn-info">Upload</button>
						</form>
			</div>

<!--
			<div>
					<h2>Show All Upload Images</h2>

					<table border="1" cellpadding="2" cellspacing="0">
							<tr>
									<th>Sr.NO</th>
									<th>Images</th>
							</tr>
					<?php
							/*
							$i=1;
							$sql="select * from tbl_scanned_images";
							$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));

							while($row=mysqli_fetch_array($qry))
							{

					?>
							<tr>
									<td><?php  echo $i;?></td>
									<td><img src="upload/<?php echo $row['file'];?>" width="100" height="100"></td>
							</tr>
				 <?php
				 			$i++;
				 		}
				 ?>
					</table>
			</div>
-->
</body>
</html>