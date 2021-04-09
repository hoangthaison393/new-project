<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./styleneed.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./product.css">
    <link rel="stylesheet" href="./option.css">
</head>
<body>
    <div style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <h1><a href="./index.php">
                            <img src="./image/logofix6.png" style="height: 65px; ">
                        </a></h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row border">
                        <div class="search-box">
                            <div>
                                <form id="form-search" role="form" method="GET" action="">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" name="search" id="search" class="form-control"
                                                   placeholder="findwhat">
                                            <span class="input-group-btn">
                                                <button id="btn-search" value="search" class="btn btn" style="background-color: rgb(254, 209, 1);">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="shopping-item">
                        <a href="cart.php">Cart</a>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="shopping-item">
                        <a href="user-login.php">Login</a>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="shopping-item">
                        <a href="user-register">Register</a>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="mainmenu-area" >
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="taskbar" href="index.html">Home</a></li>
                        <li><a class="taskbar" href="">Introduction</a></li>
                        <li><a class="taskbar" href="#">Our Product</a></li>
                        <li><a class="taskbar" href="#">NEWS</a></li>
                        <li><a class="taskbar" href="">Checkout</a></li>
                        <li><a class="taskbar" href="#">Support</a></li>
                        <li><a class="taskbar" href="#">Contact Us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <div style="background-color: black;" class="carousel-inner" role="listbox">
        <div id="backgroundimg">
            <div class="single-slide">
                <div class="slide-bg slide-one"></div>
                <div class="slide-text-wrapper">
                    <div class="slide-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <div class="slide-content">
                                        <h2>We are awesome</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                        <a class="readmore">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="tittle" style="text-align: center; font-family: Garamond; margin-top: 15px;">TOP SELLING</p>
    <div class="productdiv">
        <div>
            <img src="./image/image/topselling1.jpg" class="productimg">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <img src="./image/image/topselling2.jpg" class="productimg">
        </div>
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="productid" value="e1" class="productname" id="productname1">LG Smart Inverter</button>
            <button type="submit" name="productid" value="a1" class="productname" id="productname2">Mini Mocato Air M503</button>
            <button type="submit" name="productid" value="b1" class="productname" id="productname3">T24034WHT Microwave</button>
            <button type="submit" name="productid" value="c1" class="productname" id="productname4">Panasonic Countertop</button>
            <button type="submit" name="productid" value="d1" class="productname" id="productname5">Toshiba Inverter RAS-H</button>
        </form>
        </div>
    </div>
<?php
if(isset($_GET['productid']))
{
redirect("http://localhost:83/product.php?productid=".$_GET['productid']);
}
function redirect($url){
echo '<script>window.location="'.$url.'"</script>';
}
?>
</body>
</html>