<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <!-- <link rel="stylesheet" href="mehndi.css"> -->
</head>
<body>
    <?php
    include_once('header.php');
    include_once('./admin/config.php');
    $limit = 15;
    ?>
    <div id="container">
        <div class="img_container">
            <div class="img_h1">
                <h1>Mehndi Art Gallery</h1>
            </div> 
            
            <?php
            if(isset($_GET['page']))
            {
                $page= $_GET['page'];
            }
            else
            {
                $page =  1;
            }
            $offset = ($page-1)*$limit;
            $pagination = "SELECT * FROM postdetail";
            $paginationresult = mysqli_query($conn, $pagination) or die("query failed for pagination");
            if(mysqli_num_rows($paginationresult)>0)
            {
                $totalrecord =mysqli_num_rows($paginationresult);
                
                $totalpages = ceil($totalrecord / $limit);
                echo '<div class="pagination">';
                echo ' <ul>';
                if($page > 1)
                {
                   echo '<li><a href="gallery.php?page='.($page - 1).'">prev</a></li>';
                }
                for($i = 1;$i<=$totalpages;$i++)
                     {
                         if($i == $page)
                         {
                            $activepage = "active";
                         }
                         else{
                            $activepage = " ";
                         }
                         echo '<li ><a class= "'.$activepage.'" href="gallery.php?page='.$i.'">'.$i.'</a></li>';
                     }
                     if($totalpages > $page)
                     echo '<li><a href="gallery.php?page='.($page + 1).'">next</a></li>';
                     echo ' </ul>';
                     echo '</div>';
                 }
            ?>
                <div class="mehndi_images">
                <?php
                include_once('./admin/config.php');
               
                $images = "SELECT * FROM postdetail LIMIT {$offset},{$limit}";
                $showimages = mysqli_query($conn,$images) or die("problem in downloading images");
                if(mysqli_num_rows( $showimages) >0)
                {
                    while($showrow = mysqli_fetch_assoc($showimages))
                    {
                    // echo'</div>';
                ?>
                         <a href="image.php?image=<?php echo $showrow['pno']; ?>" target="_blank"><img src="./admin/uploads/<?php echo $showrow['images'];?>"></a>
                        <?php }
                }
                else
                {
                    echo '<h1 style="text-transform:capitalize; font-size:23px;"> No images found</h1>';
                }
                ?>
                
                    </div>
        </div>
    </div>
</body>
</html>