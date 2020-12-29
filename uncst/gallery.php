<?php
include('regf.php');

if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
?>


<!DOCTYPE html>
<html>
<header>
    <title>UNCST | Gallery</title>
    <link rel="stylesheet" type="text/css" href="mains.css">
</header>

<body>
<div class="logo">
    <img src="https://www.uncst.go.ug/wp-content/themes/uncstweb/images/logo/logo.png" alt="UNCST Logo">
</div>


<div class="nav">
    <a href="home.php" id="hom">Home</a>
    <a href="contact.php" id="con">Contact Us</a>
    <a class="active" href="gallery.php" id="gal">Gallery</a>
   <!-- <a href="index.php" id="log">Log out</a> -->
    <a href="index.php?logout='1'" id="log">Log Out</a>
</div>

<div>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1451187580459-43490279c0fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxzZWFyY2h8Mnx8dGVjaHx8MHx8fA&ixlib=rb-1.2.1&q=80&w=1080");
        }
    </style>
</div>






<div class="gallery">
    <a target="_blank" href="https://www.state.gov/wp-content/uploads/2019/04/shutterstock_563430904-2560x852.jpg">
        <img src="https://www.state.gov/wp-content/uploads/2019/04/shutterstock_563430904-2560x852.jpg" alt="Tech" width="600" height="400">
    </a>
    <div class="desc" style="color: white">Random picture 1</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">
        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Tech" width="600" height="400">
    </a>
    <div class="desc" style="color: white">Random picture 2</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png">
        <img src="https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png" alt="Tech" width="600" height="400">
    </a>
    <div class="desc" style="color: white">Random picture 3</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://d7nm3c5ruslmy.cloudfront.net/africanexponent-com-client/images/africanexponent.com/general/edu1494860482284_aspR_2.000_w1200_h600_e400.jpg">
        <img src="https://d7nm3c5ruslmy.cloudfront.net/africanexponent-com-client/images/africanexponent.com/general/edu1494860482284_aspR_2.000_w1200_h600_e400.jpg" alt="Tech" width="600" height="400">
    </a>
    <div class="desc" style="color: white">Random picture 4 </div>
</div>


</body>

</html>