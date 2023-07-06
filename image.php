<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="mehndi.css">
</head>
<body>
    
</body>
</html>
<?php
include_once('./admin/config.php');
// include('mehndi.css');
$getimage = $_GET['image'];
$image = "SELECT * FROM postdetail WHERE pno = $getimage";
$imageresult = mysqli_query($conn,$image)or die("image not showing");
if(mysqli_num_rows($imageresult)>0)
            {
                    while($row11 = mysqli_fetch_assoc($imageresult))
                {   
?>
<div class="img_show">
    <img src="./admin/uploads/<?php echo $row11['images'] ;?>">
</div>
<?php
                }
            }
?>

