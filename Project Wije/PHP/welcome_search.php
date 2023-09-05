<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search-buffer</title>
</head>
<body>
    <?php 
    
        $username_2 = 'root';
        $servername_2 = 'localhost';
        $password_2 = '';
        $dbname_2 = 'product_data';

        $connection_2 = new mysqli($servername_2,$username_2,$password_2,$dbname_2);

        if($connection_2->connect_error){
          die('connection to product_data failed! check your code' . $connection->connect_error);
        }

        $pid = strtoupper(mysqli_real_escape_string($connection_2,$_POST['item-search']));

        $sql = <<<EOT
        SELECT availability FROM item WHERE part_no = '$pid';
        EOT;

        $result  = $connection_2->query($sql);
        $row = array();

        if($result->num_rows>0){
            $row = $result->fetch_assoc();
        }else{
            $row['availability'] == 0;
        }

        if ($row['availability'] == 1){
            header('Location: welcome.html?Availability=Yes#message');
        }elseif ($row['availability'] == 0){
            header('Location: welcome.html?Availability=No#message');
        }
    
    ?>
</body>
</html>