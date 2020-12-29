<?php
include('regf.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location:index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .header {
            background: dodgerblue;
        }
        button[name=register_btn] {
            background: dodgerblue;
        }
    </style>
</head>
<body>
<div class="header">
    <h2>Admin - Home Page</h2>
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

    <!-- logged in user information -->
    <div class="profile_info">
        <img src="https://img.pngio.com/profile-icon-png-image-free-download-searchpngcom-profile-icon-png-673_673.png"  >

        <div>
            <?php  if (isset($_SESSION['user'])) : ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                <small>
                    <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                    <br>
                    <a href="admin_page.php?logout='1'" style="color: red;">Log Out</a>
                    &nbsp; <a href="create_user.php"> Add User</a>
                </small>

            <?php endif ?>
        </div>
    </div>
</div>
</body>
</html>