<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users list</title>
    <link rel="stylesheet" href="..//fontawsome/css/all.min.css">
    <link rel="stylesheet" href="..//fontawsome/js/all.min.js">
</head>
<body>
    <?php 
    include_once('adminheader.php');
    if($_SESSION["user_role"]=='0')
    {
        header("location: postdetail.php");
    }
    ?>
    <div class="heading">
        <h1> all users lists</h1>
    </div>
    <div class="btn">
            <button type="button" style="display: block; position:absolute; right:120px; top:60px; padding:5px; font-size:20px; text-transform:capitalize; border: 1px solid grey; border-radius: 4px;" onclick="addpost();"> add user</button>
            <script>
                function addpost() {
                    window.location = "adduser.php";
                }
            </script>
        </div>
<!-- ########## TABLE CONTAINER -->
<div class="tablecontainer" style="margin:30px;">
<?php
include "config.php";
$sql2 = "SELECT * FROM userdetail ORDER BY userid ASC";
$result2 = mysqli_query($conn,$sql2) or die("query failed to execute");
if(mysqli_num_rows($result2)>0){
?>
    <div class="subcontainer" style="height: 400px; width: 800px; margin: auto;">
        <table border="1" width="100%" cellspacing="10" cellpadding="20">
            <!-- table head -->
            <thead>
                <th class="head">userid</th>
                <th class="head">firstname</th>
                <th class="head">username</th>
                <th class="head">role</th>
                <th class="head">edit</th>
                <th class="head">delete</th>
            </thead>
            <tbody>
                <?php
                
                while($row = mysqli_fetch_assoc($result2))
                {
                ?>
                    <tr align="center">
                        <td><?php echo $row['userid']?></td>
                        <td><?php echo $row['firstname']." ".$row['lastname']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php 
                        // echo $row['role']
                        if($row['role']==1)
                        {
                            echo "admin";
                        }
                        else
                        {
                            echo "co-admin";
                        }        
                        ?></td>
                        <td><a href='updateuser.php?id=<?php echo $row["userid"];?>'><i class="fas fa-edit"></i></a></td>
                        <td><a href='deleteuser.php?id=<?php echo $row["userid"];?>'><i class="fas fa-trash"></i></a></td>
                    </tr>               
                <?php                    
                }
                ?>
            </tbody>
        </table>
        <?php
        }
        ?>
    </div>
</div>
</body>
</html>