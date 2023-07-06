<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
    <link rel="stylesheet" href="addu.css">
</head>
<body>
    <?php
    include_once('adminheader.php');
    if($_SESSION["user_role"]=='0')
    {
        header("location: postdetail.php");
    }
    if(isset($_POST['save']))
    {
        include_once("config.php");
        $userid = mysqli_escape_string($conn,$_POST['userid']);
        $firstname = mysqli_escape_string($conn,$_POST['fname']);
        $lastname = mysqli_escape_string($conn,$_POST['lname']);
        $username =mysqli_escape_string($conn,$_POST['username']);
        // $pass_word =mysqli_escape_string($conn,md5($_POST['pwd']));
        $role = mysqli_escape_string($conn,$_POST['role']);
        // update sql command 
        $sql = "UPDATE userdetail SET firstname = '$firstname', lastname = '$lastname', username = '$username', role = '$role' where userid = '$userid'";
        $result = mysqli_query($conn,$sql) or die("query failed");
        if($result)
            {
                header("location: user.php");
            }
    }
    ?>

<div class="heading">
        <h1> update users</h1>
    </div>
    <div class="updateuserform" >

        <!--############ GETTING DATA OF THE USER.PHP IN ADD USER TO MODIFY OR FOR UPDATION ########## -->
        <?php
        include "config.php";
        $user_id = $_GET['id'];
        $sql2 = "SELECT * FROM userdetail WHERE userid = {$user_id}";
        $result2 = mysqli_query($conn,$sql2) or die("query failed to execute check the error");
        if(mysqli_num_rows($result2)>0){
            while($row = mysqli_fetch_assoc($result2))
            {
            ?>
        <div class="formpart">
            <!-- FORM START -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
                <!-- <label  class="userlabel">User Id</label><br> -->
                <input type="hidden" name="userid" class="userinput" value="<?php echo $row['userid'];# getting value from database ?> "><br>
            </div>
            <div class="form-group">
                <label  class="userlabel">First Name</label><br>
                <input type="text" name="fname" class="userinput" value="<?php echo $row['firstname'];?>"><br>
            </div>
            <div class="form-group">
                <label  class="userlabel">Last Name</label><br>
                <input type="text" name="lname" class="userinput" value="<?php echo $row['lastname'];?>"><br>
            </div>
            <div class="form-group">
                <label  class="userlabel">username</label><br>
                <input type="text" name="username" class="userinput" value="<?php echo $row['username'];?>"><br>
            </div>
            <div class="form-group">
                <label  class="userlabel" >userrole</label><br>
                <select  id="userrole" class="userinput userinputrole" name="role" value="<?php echo $row['role'];?>">
                <?php
                if($row['role']==1)
                {
                    echo '<option  value="0" >co-admin</option>
                    <option  value="1" selected >admin</option>';
                }
                else
                // coadmin role = 0 and admin role = 1
                {
                    echo '<option  value="0" selected >co-admin</option>
                    <option  value="1" >admin</option>';
                }        
                ?>
                </select> <br>
            </div>
            <div class="form-group">
               
                <input type="submit" name="save" class="savebtn" value="update">
            </div>           
            
            </form>
            <!-- form end -->
        </div> 
        <?php
            }
        }
        ?> 
    </div>
</body>
</html>