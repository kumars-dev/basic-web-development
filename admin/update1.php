<?php
include("config.php");
if (isset($_POST['submit'])) 
{
    $postname = $_POST['pname'];
    // echo $postname;
    $postid = $_POST['pid'];
    // echo $postid;
    
    $files = $_FILES['input_file'];
    // print_r($files) ;
   
    # displaying file name must be closed
    #filename
    $filename = $files['name'];
    // echo $filename;
    $filetype = $files['type'];
    // echo $filetype;
    $filesize = $files['size'];
    // echo $filesize;
    $fileerror = $files['error'];
    // echo $fileerror;
    $filetmpname = $files['tmp_name'];
    // echo $filetmpname;
    $date = date('D,M d,Y');
    // echo $date;
    
    #extension
    $extension = explode('.', $filename); #fileext
    $extensioncheck = strtolower(end($extension)); #filecheck
    // echo $extensioncheck;
    $stored_extension = #fileexstored
        [
            'png',
            'jpg',
            'jpeg',
        ];

    if (!in_array($extensioncheck, $stored_extension))
    {
        echo "file extension do not match";
    }
    # SIZE OF FILE DETERMINED
    elseif ($filesize > (1000 * 1000 * 100))
    {
        echo "file size is more than required";
    }
    # IF ABOUVE BLOCK OF CODE IS FALSE THAN ELSE DO THE WORK OF UPLOADING FILE
    else 
    {
        $destination_file = 'uploads/' . $filename;
        if (!move_uploaded_file($filetmpname, $destination_file)) {
            echo "file is not uploaded";
        }
        else
        {
            include('config.php');
                $updatesqlpost = "UPDATE postdetail SET postname = '$postname', dates ='$date', images = '$filename' WHERE pno = '$postid'";
                $result23 = mysqli_query($conn, $updatesqlpost) or die("sqlupdate is not working");
                if($result23)
                        {
                        header('location: postdetail.php');
                        }
        }
    }
 }
?>
