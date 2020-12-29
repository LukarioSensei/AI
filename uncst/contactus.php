<?php

$con = mysqli_connect("localhost","root","","contact us");

if(!$con){
    die('Could not Connect to the server:' .mysqli_error($con));
}

include_once 'contactus.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

if(mysqli_query($con, $sql))
{
    echo "Your message has been sent successfully!";
}
else{
    echo "Error: ".$sql.":-".mysqli_error($con);
}
mysqli_close($con);
}



//$query = mysqli_query($con,"select * from messages where name = '$name' and email = '$email' and subject = '$subject' and message = '$message'")
//or die("Failed to query database ".mysqli_error($con));

//$sql = "INSERT INTO messages (name, email, subject, message) VALUES ({$_POST['name']}, {$_POST['email']}, {$_POST['subject']}, {$_POST['message']})";

//$data = mysqli_fetch_array($query);


header("Location: contact.php");

?>