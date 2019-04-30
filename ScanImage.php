<?php
session_start();
  include 'config.php';

if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset(_SESSION['id']))
{
  header('Location:login.php');
}
else
 {
  
  include 'config.php';
  
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Scan Images</title>
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

        <script>
            $(document).ready(function() {
                $(".nav-tabs a").click(function() {
                    $(this).tab('show');
                });
            });
        </script>
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
            
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
            
            #map {
                width: 100%;
            }
            
            .imgItem {
                margin: auto;
                width: 80%;
                height: 15em;
                overflow: hidden;
            }
            
            .imgzoom {
                transform: scale(1, 1);
                transition: 1s;
            }
            
            .imgzoom:hover {
                transform: scale(1.5, 1.5);
                transition: 1s;
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
        <!-- ......................................DRAG & DROP.......................................-->
        <style>
    .Neon {
    font-family: sans-serif;
    font-size: 14px;
    color: #494949;
    position: relative;
    

}
.Neon * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.Neon-input-dragDrop {
    display: block;
    width: 343px;
    margin: 0 auto 25px auto;
    padding: 25px;
    color: #8d9499;
    color: #97A1A8;
    background: #fff;
    border: 2px dashed #C8CBCE;
    text-align: center;
    -webkit-transition: box-shadow 0.3s, border-color 0.3s;
    -moz-transition: box-shadow 0.3s, border-color 0.3s;
    transition: box-shadow 0.3s, border-color 0.3s;
}
.Neon-input-dragDrop .Neon-input-icon {
    font-size: 48px;
    margin-top: -10px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.Neon-input-text h3 {
    margin: 0;
    font-size: 18px;
}
.Neon-input-text span {
    font-size: 12px;
}
.Neon-input-choose-btn.blue {
    color: #008BFF;
    border: 1px solid #008BFF;
}
.Neon-input-choose-btn {
    display: inline-block;
    padding: 8px 14px;
    outline: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    font-size: 12px;
    font-weight: bold;
    color: #8d9496;
    border-radius: 3px;
    border: 1px solid #c6c6c6;
    vertical-align: middle;
    background-color: #fff;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
}
#image {
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
        </style>
        <script>
//--------------------------------------------------------DEPOSITE SLIP OCR-----------------------------------------------------
   
    var arr = [];
    
    var words = new Array("Account Title","IBAN","Credit Card No.","TOTAL AMOUNT","Total Amount ln Words","Depositor's Name","Contact No.","Depositor's CNIC No.","Depositor's Account No.");

    var words2 = new Array("John Wiliams","PK99HABB0012345678910","1234567891234567","100000","ONE LAC","John Wiliams","9090909090","42101-123456789-10","12345678");
    function convert()
    {
        console.log("----------------------");
        var string = OCRAD(image);//image is image's id
    
       // alert(string);

        console.log(string);     

        	// arr me khuch b nhi ha.. ab wo words jo hmy chahyeb after extraction.. on words ko macth krwae gy.
        	// kesy...
        	// string me extracted words hn... or word ki array me wo words hn jo hmy chahye.. 
        	// on words ko hm string sy match krwae gy ta k os me sy hamary desired words a sky. 
        	document.getElementById("para1").innerHTML += "<b>Extracted Words Are...</b><br>";
        for(i=0;i<words.length;i++)
        {
            arr[i] = string.match(words[i]);
            document.getElementById("para1").innerHTML += arr[i]+", ";
        }
        for(i=0;i<words.length;i++)
        {            
           // console.log(arr[i]);
         document.getElementById("para2").innerHTML += "<br/><label>"+arr[i]+"</label> <input type='text' value='"+words2[i]+"'/> <br/>";
        }

    }
//--------------------------------------------------------DEPOSITE SLIP OCR END---------------------------------------------------

</script>
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
            //....................................IMG upload and show .. means deposite slip ko upload kr k show krwa rhy hn then convert ka button press hoga............................
                 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
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
        <div class="container">
            <h2>Dynamic Tabs</h2>
            <ul class="nav nav-tabs">

                <li><a href="#menu1">Scan Deposite Slip</a></li>
                <li><a href="#menu2">Scan Accout Opening Form</a></li>
                <li><a href="#menu3">Scan Remitance</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3 style="text-align: center;">NOTE</h3>
                    <p style="text-align: center;"><b>Click your desired tab to Scan Documents</b></p>
                </div>
                <!--......................................Deposite Slip.............................................-->
                <div id="menu1" class="tab-pane fade">
                    <h3>Scan Deposite Slip</h3>
                    
                    <div class="Neon Neon-theme-dragdropbox">
                        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" onchange="readURL(this);" name="files[]" id="filer_input2" type="file" accept="image/*" onchange="readURL(this);">
                        <div class="Neon-input-dragDrop">
                            <div class="Neon-input-inner">
                                <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i>
                                </div>
                                <div class="Neon-input-text">
                                    <h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span>
                                </div><a class="Neon-input-choose-btn blue" name="Dimage" id="Dimage">Browse Files</a>
                            </div>
                        </div>
                    </div>
                    <button id="convert" onclick="convert()" class="Neon-input-choose-btn blue" style="text-align: center; width: 100px;margin:auto;display:block;">Convert</button>
                    <br>
                    <img id="image" src="UploadImg.gif" alt="your image" style="width: 500px;" align="middle" />
                    <p id="para1"></p>
                    <p id="para2"></p>
                </div>
                <!--........................................Remitance...........................................-->
                <div id="menu2" class="tab-pane fade">
                    <h3>Scan Remitance</h3>
                    
                    <div class="Neon Neon-theme-dragdropbox">
                        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
                        <div class="Neon-input-dragDrop">
                            <div class="Neon-input-inner">
                                <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
                                <div class="Neon-input-text">
                                    <h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div>
                        </div>
                    </div>
                </div>
                <!--........................................Remitance...........................................-->
                <div id="menu3" class="tab-pane fade">
                    <h3>Scan Remitance</h3>
                    <div class="Neon Neon-theme-dragdropbox">
                        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
                        <div class="Neon-input-dragDrop">
                            <div class="Neon-input-inner">
                                <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
                                <div class="Neon-input-text">
                                    <h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span>
                                </div>
                                <a class="Neon-input-choose-btn blue">Browse Files</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--...................................................................................-->

      
    
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
}// end of else body ... else top py define kiata wo ha

?>