<?php
 if (isset($_POST['submit'])) {
    $postname = $_POST['pname'];
    $files = $_FILES['input_file'];
    # displaying file name must be closed
    #filename
    $filename = $files['name'];
    $filetype = $files['type'];
    $filesize = $files['size'];
    $fileerror = $files['error'];
    $filetmpname = $files['tmp_name'];
    $date = date('D,M d,Y');
    #extension
    $extension = explode('.', $filename); #fileext
    $extensioncheck = strtolower(end($extension)); #filecheck
    // print_r($extensioncheck);
    $stored_extension = #fileexstored
        [
            'png',
            'jpg',
            'jpeg',
        ];
    if (!in_array($extensioncheck, $stored_extension)) {
        echo "file extension do not match";
    }
    # SIZE OF FILE DETERMINED
    elseif ($filesize > (1000 * 1000 * 100)) {
        echo "file size is more than required";
    }
    # IF ABOUVE BLOCK OF CODE IS FALSE THAN ELSE DO THE WORK OF UPLOADING FILE
    else {
        $destination_file = 'uploads/' . $filename;
        if (!move_uploaded_file($filetmpname, $destination_file)) {
            echo "file is not uploaded";
        } else {
            include("config.php");
            $insertsql = "INSERT INTO postdetail( postname, dates, images) VALUES ('$postname','$date','$filename')";
            $sqlinserted = mysqli_query($conn, $insertsql) or die("sqlinserted qerry is not working");
            if($sqlinserted)
            {
                header('location: postdetail.php');
            }
        }
    }
}
?>