<?php
include('regf.php');

if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html xmlns:https="http://www.w3.org/1999/xhtml">
<header>
<title>UNCST | Home</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</header>

<body>

    <div class="logo">
        <img src="https://www.uncst.go.ug/wp-content/themes/uncstweb/images/logo/logo.png" alt="UNCST Logo">
    </div>

    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>
    </div>

    <div class="nav">
        <a class="active" href="home.php" id="hom">Home</a>
        <a href="contact.php" id="con">Contact Us</a>
        <a href="gallery.php" id="gal">Gallery</a>
        <a href="index.php?logout='1'" id="log">Log Out</a>
    </div>

    <div>
        <style>
            body {
                background-image: url("https://images.unsplash.com/photo-1451187580459-43490279c0fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxzZWFyY2h8Mnx8dGVjaHx8MHx8fA&ixlib=rb-1.2.1&q=80&w=1080");
            }
        </style>
    </div>

     <style>
         .bordered {

             border-bottom-style: dotted;
             border-right-style: dotted;
             border-left-style: dotted;
             border-radius: 5px;
             border-color: #000010;
             background-color: #000010;

         }

         .middle {
                text-align: center;
                width: 700px;
                margin: auto;
         }
         .middle1 {
         }
     </style>

<div class="middle">
    <div class="middle1"
         <div class = "paragraphs">
             <div class = "bordered-left">
                 <div class = "bordered">
                     <h2 id="h" style="color: white">
                         INTRODUCTION
                     </h2>

                     <div>
                         <p style="font-size:130%;color: white;">Welcome to our virtual home. The website provides better user experience and improved service delivery. With this refreshed platform, we hope to engage with you, even more, to serve you better as we implement our mandate.</p>

                             <p style="font-size:130%;color: white">    It is our sincere wish that you find the website resourceful. Please do not hesitate to <a href="contact.php">contact us</a> on matters concerning Science, Technology and Innovation in the country. We look forward to cooperating with you further as we transform Uganda into a science and technology led society.
                         </p>
                      </div>
                  </div>
             </div>

             <div class = "bordered-right">
                <div class="bordered">
                     <h2 style="color: white"> Who We Are</h2>
                     <div>
                         <p style="font-size:130%;color: white">
                             The UNCST was instituted to implement the provisions of the UNCST Act 1990, CAP 209. Our primary goal is to develop and implement ways of incorporating science and technology in the national development process. The Council advises the government on relevant policy matters and coordinates research and development activities in Uganda.
                         </p>
                     </div>
                </div>
             </div>
         </div>



         <div>
            <div class = "bordered-left">
                 <div class = "bordered">
                     <h2 style="color: white">Our vision</h2>

                     <div>
                         <p style="font-size:130%;color: white">
                             A prosperous Science and Technology Led Ugandan Society.
                         </p>
                     </div>


                      <h2 style="color: white">Our Mission</h2>

                     <div>
                         <p style="font-size:130%;color: white">
                             To provide effective and innovative leadership in the development, promotion and application of Science and Technology and its integration in sustainable national development.
                         </p>
                     </div>
                 </div>
             </div>
            <div class="bordered">
                     <h2 style="color: white">UNCST Strategic Goals:</h2>

                 <div>
                     <ul style="font-size:130%;color: white">
                         <li>Improve or streamline national science and technology policy environment to foster scientific and technological innovation.</li>
                         <li>Strengthen national system for research, product development, technology transfer and intellectual property management.</li>
                         <li>Increase public understanding and appreciation of science and technology.</li>
                         <li>Strengthen the UNCST institutional research base and technical capacity.</li>
                     </ul>
                 </div>
            </div>
         </div>
    </div>
</div>
 </body>

 </html>