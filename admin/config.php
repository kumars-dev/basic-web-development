<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mehndiart";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_report(MYSQLI_REPORT_STRICT);
    if(!$conn)
      {
         echo "connection not established" ;
      }

?>