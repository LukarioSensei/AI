<?php include('regf.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <title>UNCST</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <div id="frm">
            <form action="index.php" method="post">
                <?php echo display_error(); ?>
                <p>
                    <label>Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your User Name"/>
                </p>

                <p>
                    <label>Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password"/>
                </p>
                <div class="input-group">
                    <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
              <!--  <p>
                    <input type="submit" class="btn" name="submit" value="Login"/>
                </p> -->
                <p>
                    Don't have an account? <a href="register.php">Register</a>
                </p>
            </form>
        </div>
    </body>

</html>