<?php
    $connect = mysqli_connect(
          'sql303.infinityfree.com', //URL
          'if0_38447676', //Username
          'xJ8mMZkXQe3ZUni', //Your password here, either root or empty
          'if0_38447676_5225_test' // your database name, check your PHP myAdmin
        );
        if(!$connect){
          echo 'Error Code: ' . mysqli_connect_errno();
          echo 'Error Message: ' . mysqli_connect_error();
          exit;
        }
?>