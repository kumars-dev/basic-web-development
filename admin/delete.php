<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete posts</title>
    <!-- <link rel="stylesheet" href="admin_c.css"> -->
    <link rel="stylesheet" href="upd.css">
    
</head>
<body>
    <?php 
    include_once('adminheader.php');
    ?>
    <div class="backimg">
        <?php
        if(isset($_POST['delete']))
        {
            include_once('config.php');
            // $pid = mysqli_escape_string($conn,$_POST['pid']);
            $pname = mysqli_escape_string($conn,$_POST['pname']);
             $sql34= "DELETE FROM postdetail where postname = '$pname'";
             $result34 = mysqli_query($conn,$sql34) or die('deletion failed');
             if($result34)
             {
                header("Location: postdetail.php");
             }

        }
        
        ?>
    <div class="heading">
        <h1>delete post</h1>
    </div>
    <!-- { -->
        <div class="delcontainer">
        <?php
        // $pno = $_GET['id'];
        include_once('config.php');
        $sql33 = "SELECT * FROM `postdetail`";
        $result33 = mysqli_query($conn,$sql33) or die("showing postdetail failed");          
        ?>
        <!-- { -->
            <div class="deleteform">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="delete">
        <!-- <label for="postname" >
                pid:
            </label><input type="text" name="pid" ><br>         -->
        <label for="postname" >
                postname:
            </label><input type="text" name="pname" ><br>        
            <button id="submit" name="delete">delete</button>
        </form>
        </div> 
        <!-- } -->
    </div>
        <?php
       

        ?>    

    </div>
    <!-- } -->
    
</body>
</html>