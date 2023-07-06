<?php
include "config.php";
session_start();
if(!isset($_SESSION["username"]))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="admin.css">
    <!-- <link rel="stylesheet" href="../fontawsome/css/all.min.css">
    <link rel="stylesheet" href="../fontawsome/js/all.min.js"> -->
    <script src="https://kit.fontawesome.com/126cf4109e.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="admin_nav">

<ul class="unorderlist">
    <li><a href="postdetail.php"><i class="fas fa-home"></i>  home</a></li>
    <li><a href="addposts.php"><i class="fas fa-plus"></i> Add</a></li>
    <!-- <li><a href="update.php"><i class="fas fa-upload"></i> update</a></li> -->
    <li><a href="delete.php"><i class="fas fa-minus"></i> delete</a></li>
    <?php
    if($_SESSION["user_role"]=='1')
    {
    ?>
    <li><a href="user.php"><i class="fas fa-info-circle"></i> allusers</a></li>
    <li><a href="adduser.php"><i class="fas fa-user"></i> adduser</a></li>
    <?php
    }
    ?>
    
    <div class="2ndul" style=" display:inline; position:relative; left:10%; padding:10px; margin:10px; ">
        <li style="color: white; border: 0px solid white; border-radius: 3px; background:transparent; box-shadow: 0px 2px 0px 0px green;"> hello <?php echo $_SESSION["username"];?></li>
        <li><a href="logout.php"> logout</a></li>
    </div>
</ul>


</div>
</body>
</html>