
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
    <title>UNCST | Contact</title>
    <link rel="stylesheet" type="text/css" href="mains.css">
</header>

<body>
<div class="logo">
    <img src="https://www.uncst.go.ug/wp-content/themes/uncstweb/images/logo/logo.png" alt="UNCST Logo">
</div>


<div class="nav">
    <a href="home.php" id="hom">Home</a>
    <a class="active" href="contact.php" id="con">Contact Us</a>
    <a href="gallery.php" id="gal">Gallery</a>
    <a href="index.php?logout='1'" id="log">Log Out</a>
</div>

<div>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1451187580459-43490279c0fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxzZWFyY2h8Mnx8dGVjaHx8MHx8fA&ixlib=rb-1.2.1&q=80&w=1080");
        }
        .center {
            width: 800px;
            margin: left;
        }
    </style>
</div>

<div class="center">
    <div style="color: white">
        <h2>CONTACT US</h2>
    </div>

    <div id="frm">
        <form action="contactus.php" method="post">

                <label for="name" style="color: white">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"/>

                <label for="email" style="color: white">Your Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email"/>

                <label for="subject" style="color: white">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter your subject"/>


                <label for="message" style="color: white">Your Message</label>
                <input type="text" id="message" name="message" placeholder="Enter your message"/>

                <input type="submit" id="btn" name="submit" value="Send">
        </form>
    </div>
</div>
</body>

</html>