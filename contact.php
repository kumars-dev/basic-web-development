<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="mehndi1.css">   
    <link rel="stylesheet" href="./fontawsome/css/all.min.css">
    <link rel="stylesheet" href="./fontawsome/js/all.min.js">
</head>
<body>
    <!-- header -->
    <?php
    include_once('header.php');
    include_once('./admin/config.php');
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="formback">
    <div class="fcontainer">
    <label for="">name:</label>
    <input type="text" name="name">
    </div>
    <div class="fcontainer">
    <label for="">phone no:</label>
    <input type="text" name="phone">
    </div>
    <div class="fcontainer">
    <label for="">email:</label>
    <input type="email" name="email">
    </div>
    <div class="fcontainer">
    <label for="">subject:</label>
    <input type="text" name="subject">
    </div>
    <div class="fcontainer">
    <label for="">message:</label>
    <textarea name="message" cols="30" rows="10"></textarea>
    </div>
   <button name="submit">submit</button>
    </div>
    
</form>

        
</body>
</html>