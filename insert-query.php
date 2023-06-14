<?php require_once('inc/connection.php'); ?>
<?php 
    
    /* 
        INSERT INTO table_name (
            colomn 01, colomn 02, etc
        ) VALUES (
            value1, value2 , etc
        )
    */
    $first_name = 'Nadeepa';
    $last_name = 'Thilakarathne';
    $email = 'nadeepachathuranga@gmail.com';
    $password = 'password';
    $is_deleted = 0;
    
    $hashed_password = sha1($password);

    $query = "INSERT INTO user ( first_name, last_name, email, password, is_deleted)
    VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}',{$is_deleted})";

    $result = mysqli_query($connection, $query);
    
    if ($result){
        echo "1 record added.";
    }else{
        echo "Database query failed.";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query</title>
</head>
<body>
    
    
</body>
</html>
<?php mysqli_close($connection);