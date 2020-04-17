<?php
if (isset($_GET['del'])){
    extract($_GET);

    require "connect.php";
    // prepare query
    $delete_row = "DELETE FROM `user_data` WHERE id='$del' ";

    // execute delete
    $delete = mysqli_query($conn, $delete_row);

    if ($delete){
        // echo " Entry $xyz deleted successfully";
        // Go back to users to view changes
        header("location: display_data.php");
    }else{
        die("Deletion failed");
    }
}



