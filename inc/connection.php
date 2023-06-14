<?php 

    //$connection = mysqli_connect('dbserver','dbuser', 'dbpassword', 'dbname')

    $connection = mysqli_connect('localhost','root', '', 'userdb');

    //mysqli_connect_errno();  mysqli_connect_error(); <--- to check errors

    if (mysqli_connect_errno()){
        die ('Database connection failed'.mysqli_connect_error());
    } else {
        //echo "connection successful.";
    }

?>