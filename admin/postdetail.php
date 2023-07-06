<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All posts</title>
    <link rel="stylesheet" href="pagination.css">
</head>

<body>
    <?php
    include_once('adminheader.php');
    // session_start();
    ?>
    <div class="backimg">

        <div class="heading">
            <h1>All posts</h1>
        </div>
        <div class="btn">
            <button type="button" style="display: block; position:absolute; right:120px; top:60px; padding:5px; font-size:20px; text-transform:capitalize; border: 1px solid grey; border-radius: 4px;" onclick="addpost();"> add post</button>
            <script>
                function addpost() {
                    window.location = "addposts.php";
                }
            </script>
        </div>

        <!-- table of all posts list  -->
        <div class="tabcontainer">
            <div class="table1">
            <?php
            include_once('config.php');
            $limit = 3;
            // $page= $_GET['page'];
            if(isset($_GET['page']))
            {
                $page= $_GET['page'];
            }
            else
            {
                $page =  1;
            }
            $offset = ($page-1)*$limit;
            $select = "SELECT * FROM postdetail LIMIT {$offset},{$limit}";
            $selected_query = mysqli_query($conn, $select) or die("postdetailquerry is not working");
            if(mysqli_num_rows($selected_query)>0) 
            {
            ?>
                <table id="table" class="tablecl" border="1">
                    <thead>
                        <tr class="table1row">
                            <th class="theading">
                                s.no
                            </th>
                            <th class="theading">
                                post name
                            </th>
                            <th class="theading">
                                date
                            </th>
                            <th class="theading">
                                images
                            </th>

                            <th class="theading">
                                edit
                            </th>

                            </th>
                            <th class="theading" id="tdata1">
                                delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
<!-- ******************************************************************************** -->
<!-- *************************** php code for file submitted ********************* -->
<!-- ******************************************************************************** -->
                        <?php
                        while ($rows = mysqli_fetch_assoc($selected_query)) 
                        {
                        ?>
              <tr class="table1row">
              <td class="tdata"><?php echo $rows['pno']; ?></td>
              <td class="tdata"><?php echo $rows['postname']; ?></td>
              <td class="tdata"><?php echo $rows['dates']; ?></td>
              <td class="tdata"><img src="uploads/<?php echo $rows['images']; ?>" alt="" height="150px" width="150px" style="border-radius: 5px ;"></td>
              <td class="tdata"><a href="update.php?id=<?php echo $rows['pno']; ?>"><i class="fas fa-edit"></i></a></td>
              <td class="tdata" id="tdata1"><a href="deletepost.php?id=<?php echo $rows['pno']; ?> "><i class="fas fa-trash"></i></a></td>
              </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                }
                else{
                    echo "<h2>No Records Found</h2>";
                }
               // mysqli_close($conn);
                ?>
               </div>
        </div>
        <!-- <div class="pagination">
            <ul> -->
                <?php
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
                        echo '<li><a href="postdetail.php?page='.($page - 1).'">prev</a></li>';
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
                         echo '<li ><a class= "'.$activepage.'" href="postdetail.php?page='.$i.'">'.$i.'</a></li>';
                     }
                     if($totalpages > $page)
                     echo '<li><a href="postdetail.php?page='.($page + 1).'">next</a></li>';
                     echo ' </ul>';
                     echo '</div>';
                 }
                ?>
                
        </div>

    </div>


</body>

</html>