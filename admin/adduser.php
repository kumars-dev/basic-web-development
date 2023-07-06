<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add users</title>
    <link rel="stylesheet" href="addu.css">
</head>

<body>
    <?php
    include_once('adminheader.php');
    if(isset($_POST['save']))
    {
        include_once("config.php");
        $firstname = mysqli_escape_string($conn,$_POST['fname']);
        $lastname = mysqli_escape_string($conn,$_POST['lname']);
        $username =mysqli_escape_string($conn,$_POST['username']);
        $pass_word =mysqli_escape_string($conn,md5($_POST['pwd']));
        $role = mysqli_escape_string($conn,$_POST['role']);
        $sql = "SELECT username FROM userdetail WHERE username = '$username'";
        $result = mysqli_query($conn,$sql) or die("query failed");
        if(mysqli_num_rows($result)>0)
            {
                echo "username already exist! think again";
            }
        else
            {
                $sql1 ="INSERT INTO userdetail (firstname,lastname,username,password,role) VALUES ('$firstname','$lastname','$username','$pass_word','$role')";
                $result1 = mysqli_query($conn,$sql1) or die("query failed");
                // echo "form submitted successfully";
                if($result1)
                {
                    header("location: user.php");
                }
            }
    }
    ?>

    <div class="heading">
        <h1> add users</h1>
    </div>

    <div class="adduserform">
        <div class="formpart">
            <!-- FORM START -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label  class="userlabel">First Name</label><br>
                    <input type="text" name="fname" class="userinput"><br>
                </div>
                <div class="form-group">
                    <label  class="userlabel">Last Name</label><br>
                    <input type="text" name="lname" class="userinput"><br>
                </div>
                <div class="form-group">
                    <label  class="userlabel">username</label><br>
                    <input type="text" name="username" class="userinput"><br>
                </div>
                <div class="form-group">
                    <label class="userlabel">password</label><br>
                    <input type="text" name="pwd" class="userinput"><br>
                </div>
                <div class="form-group">
                    <label  class="userlabel">userrole</label><br>
                    <select  id="userrole" class="userinput userinputrole" name="role">
                        <option  value="0">co-admin</option>
                        <option  value="1">admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="save" class="savebtn" value="Register">
                </div>           
            </form>
        </div>        
    </div>
    
</body>

</html>