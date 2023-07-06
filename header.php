<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="mehndi.css">
    <link rel="stylesheet" href="./fontawsome/css/all.min.css">
    <link rel="stylesheet" href="./fontawsome/js/all.min.js">
    <script type="javascript"></script>
</head>
<body>
    <!-- header -->
    <div id="navigation">
        <!-- web view -->
        <ul class="unorderlist">
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="gallery.php"><i class="fas fa-image"></i> Gallery</a></li>           
            <li><a href="contact.php"><i class="fas fa-headset"></i> Contact</a></li>           
       </ul>
      
    </div>
    <!-- ########## web view end ########### -->

    <!-- mobile view color:red-->

    <div class="mobile_nav"> 
        <!-- hamburger -->
                <div class="hamburger" onclick="show_mobile_view()">
                <i class="fas fa-bars"></i>
                </div>
                <!-- mobilemenu  color:green-->
        <div class="mobile_menu">               
            <ul class="mobile_unorderlist">
                <li><a href="index.php"><i class="fas fa-home "></i> Home</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="gallery.php"><i class="fas fa-image"></i> Gallery</a></li>               
                <li><a href="contact.php"><i class="fas fa-headset"></i> Contact</a></li>               
            </ul>         
           
        </div>
            
    </div>
        
    <!-- ########### mobile view end ########### -->



    <!-- <script >
    
     function show_mobile_view(){

        var mobilenav = document.querySelector(".mobile_nav");
        var toggle = document.querySelector(".hamburger");
        var menuitem= document.querySelector(".mobile_menu");
        toggle.menuitem.style.display="none"; 

    }

    </script> -->
</body>
</html>