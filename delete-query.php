<?php require_once('inc/connection.php');?>
<?php 
    /*
        DELETE FROM  table_name 
        WHERE colomn_name = value
        LIMIT 1
     */

     $deleteQuery = "DELETE FROM user WHERE id=11 LIMIT 1";
     
     $resultUpdate = mysqli_query($connection, $deleteQuery);

     if ($resultUpdate){
        echo mysqli_affected_rows($connection)." Record deleted.";
     }else{
        echo "Database delete query failed.";
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Query</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection);