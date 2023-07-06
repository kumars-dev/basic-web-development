<?php
if($_SESSION["user_role"]=='0')
{
    header("location: postdetail.php");
}
include "config.php";
$userid = $_GET['id'];
$sql = "DELETE FROM postdetail where pno = '$userid'";

if(mysqli_query($conn,$sql))
{
    header("Location: postdetail.php");
}
else{
    echo "<p> can\'t delete the record<p>";
}
mysqli_close($conn);


?>