<?php require_once('inc/connection.php');?>
<?php 

    $select_all_query = "SELECT id, first_name, last_name, email FROM user";

    $result_all = mysqli_query($connection,$select_all_query);

    if($result_all){
        //checking how many records retured from the query.
        echo mysqli_num_rows($result_all)." Records found.<hr>";

        $table = '<table border>';
        $table .= '<tr>
                    <th> Id </td>
                    <th> First Name </td>
                    <th> Last Name </td>
                    <th> Email </td>
                    </tr>';

        while($record = mysqli_fetch_assoc($result_all)){
            $table .= '<tr>';
            $table .= '<td>'.$record['id'].'</td>';
            $table .= '<td>'.$record['first_name'].'</td>';
            $table .= '<td>'.$record['last_name'].'</td>';
            $table .= '<td>'.$record['email'].'</td>';
            $table .= '</tr>';
        }
        $table .='</table>';
        
        // $record = mysqli_fetch_assoc($result_all);
        // echo "<pre>";
        // print_r($record);
        // echo "</pre>";

    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <?php echo $table; ?>
</body>
</html>
<?php mysqli_close($connection);