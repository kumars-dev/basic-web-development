<!-- username 
montu
password
montu123 -->
<?php
include "config.php";
session_start();
if (isset($_SESSION["username"])) #checking if the user is trying to redirect from one page to another than header redirect to landing page
{
    header('location: postdetail.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginform</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php

    ?>
    <div class="logincontainer">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="loginform">
        <h1 >login form</h1>
        <div class="nextcontainer">
<div class="formcontent">
        <label for="username" style="margin: 10px; padding: 10px;">username</label>
        <input type="text" name="username" placeholder="username" style="margin: 10px; padding: 10px;"></br>
</div>
<div class="formcontent">
        <label for="password" style="margin: 10px; padding: 10px;">password</label>
        <input type="password" name="pwd" placeholder="password" style="margin: 10px; padding: 10px;"></br>
</div>
        <button name="submit" style="margin: 10px; padding: 10px;">submit</button>
        </div>
    </form>
    </div>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".nextcontainer"),{
		max: 25,
		speed: 400
	});
    </script>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    include_once("config.php");
    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = md5($_POST['pwd']);
    $sql4 = "SELECT userid, username, role FROM userdetail where username = '{$uname}' AND password = '{$pwd}'";
    $result4 = mysqli_query($conn, $sql4) or die("query failed");
    if (mysqli_num_rows($result4) > 0) {
        while ($row = mysqli_fetch_assoc($result4)) {
            session_start(); //used to store temporary data in server side 
            $_SESSION["username"] = $row['username'];
            $_SESSION["user_id"] = $row['userid'];
            $_SESSION["user_role"] = $row['role'];

            # REDIRECT TO THE POSTDETAILS.PHP
            header("location: postdetail.php");
        }
    } else {
        echo "username and password are mismatch";
    }
}
?>