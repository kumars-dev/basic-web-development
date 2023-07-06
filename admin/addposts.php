<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addpost</title>
    <!-- <link rel="stylesheet" href="admin_c.css"> -->
    <link rel="stylesheet" href="addpost.css">
</head>

<body>
    <?php

    include_once('adminheader.php');
    ?>
    <div class="backimg">
        <div class="postcontainer">
            <!-- **********************************************************headingofpost************************************************************* -->
            <div class="heading">
                <h1>add posts</h1>
            </div>
            <!-- **********************************************************postform************************************************************* -->
            <div class="postform">
                <form  action="postdetailinsert.php" method="POST" id="form" enctype="multipart/form-data">
                    <label for="postname">
                        postname:
                    </label><input type="text" name="pname">

                    <label for="uploads">
                        upload file:
                    </label><input type="file" name="input_file" placeholder="select from computer"><br><br>
                    <button id="submitbtn" name="submit">submit</button>
                   
                </form>
            </div>
        </div>

    </div>
</body>

</html>