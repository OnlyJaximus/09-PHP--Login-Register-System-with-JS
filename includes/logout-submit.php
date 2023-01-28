<?php

session_start();

session_unset();
// this function will takes all the session variables were created when we login
// and delete all the values inside the session variables 
// $_SESSION['userId'] =  $row['idUsers'];
// $_SESSION['userUid'] =  $row['uidUsers'];

session_destroy();

header("Location: ../index.php");
