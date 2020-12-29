<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$con = mysqli_connect("localhost","root","","logins");
mysqli_select_db($con, "logins");


$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);



$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'")
            or die("Failed to query database ".mysqli_error($con));

$row = mysqli_fetch_array($result);

if(empty($_POST['user']) or empty($_POST['pass']))
{
    echo "Username and Password required.";
}
else {

    if ($row ['username'] == $username && $row ['password'] == $password) {
        echo "Login Successful! Welcome, " . $row['username'];
        header("Location: home.php");
    } else {
        echo "Failed to login! Your Username or Password is wrong";
    }
}
?>