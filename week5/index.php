=<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5 Lab</title>
    <style>
        .color{
            padding: 20px;
            color: white;
            font-size: 20px;
            text-align: center;
        }
        .color-container {
            display: flex;
            flex-direction: column;  
        }
    </style>
</head>

<body>
    <div class="color-container">
    <?php
    //Connect to Mysql DB
    $connect = mysqli_connect('localhost', 'root', 'root', '5225_w4');

    if(!$connect) {
    die("Connection Failed:" . mysqli_connect_error());
    }

    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect,$query);

    echo '<pre>' .print_r($colors). '</pre>';
    
    foreach ($colors as $color){
        echo '<div class="color" style="background-color: ' . $color['Hex'] . ';">' . $color['Name'] . '</div>';
    }
    ?>
    </div>
</body>
</html>