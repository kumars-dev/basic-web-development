<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateposts</title>
    <!-- <link rel="stylesheet" href="admin_c.css"> -->
    <link rel="stylesheet" href="upd.css">
</head>
<body>
    <?php 
    include_once('adminheader.php');  
    ?>
    <!-- first div -->
    <!-- [ -->
    <div class="backimg">
        <!-- second div -->
        <!-- [ -->
        <div class="heading">
        <h1>update posts</h1>
        </div>
        <!-- end of second div -->
        <!-- ] -->

        <!-- third div -->
        <!-- [ -->
        <div class="formcontent2">
                <?php
            include_once('config.php');
            $userid = $_GET['id'];
            $sql11="SELECT * FROM postdetail where pno = $userid";
            $result11= mysqli_query($conn,$sql11) or die("query do not execute") ;
            if(mysqli_num_rows($result11)>0)
            {
                    while($row11 = mysqli_fetch_assoc($result11))
                {   

            ?>

        <form action="update1.php" enctype="multipart/form-data" method="post" class="form2">
        <!-- <label for="postname" >
                postid:</label>
        <input type="text" name="pid" value="<?php echo $row11['pno'];  ?>"> -->
        <label for="postname" >
                postname:</label>
        <input type="text" name="pname" value="<?php echo $row11['postname'];  ?>">        
            
            <label for="uploads" >
                upload file:
            </label><input type="file" name="input_file" placeholder="select from computer" ><br><br>
            <button id="submit" name="submit">update</button>
        </form>
    <?php
       }
    }
?>
    </div>
    <!-- end of third div -->
    <!-- ] -->
    </div>
    <!-- end of first div -->
    <!-- ] -->
</body>
</html>