<?php require_once('inc/connection.php');?>
<?php 
    /*
        UPDATE  table_name 
        SET colomn_1 = value_1, colomn_2 = value_2
        WHERE colomn_name = value
        LIMIT 1                             <--- limit 1 means it only update one record
     */

     $updateQuery = "UPDATE user SET first_name='Gobba ' WHERE id=7 LIMIT 1";
     
     $resultUpdate = mysqli_query($connection, $updateQuery);

     if ($resultUpdate){
        echo mysqli_affected_rows($connection)." Record updated.";
     }else{
        echo "Database update query failed.";
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Query</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection);