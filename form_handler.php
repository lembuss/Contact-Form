<?php
if (isset($_POST['msg_submit'])){
    $name = $_POST['fn'];
    $sname = $_POST['ln'];
    $email = $_POST['em'];
    $nationality = $_POST['ctry'];
//    $ccode = $_POST['code'];
    $phone = $_POST['pnum'];
    $message = $_POST['txt'];

//    connect to database
    require 'connect.php';

    $collect_info = "INSERT INTO `user_data`(`id`, `name`, `surname`, `email`, `nationality`, `phone`, `message`) 
                            VALUES (null ,'$name', '$sname','$email','$nationality','$phone','$message')";

    $insert = mysqli_query($conn, $collect_info);

    if ($insert) {
//        header("location: index.html");
        header("location: display_data.php");
//        echo "data recorded";
    } else{
        echo "Failed to record data";
    }
}