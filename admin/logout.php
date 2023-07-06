<?php

include "config.php";
session_start(); # starting session
session_unset(); # unset of variable declare in unset
session_destroy(); # session destroy
header('location: index.php');

?>