<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Display</title>
</head>
<body>
    <h1>Data From Users</h1>
    <a class="btn btn-secondary" href="index.html">Back to Form</a>
    <table class="table table-bordered">
        <tr>
<!--            <th>ID</th>-->
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>NATIONALITY</th>
            <th>PHONE NUMBER</th>
            <th>MESSAGE</th>
            <th></th>
        </tr>

        <?php
            //connect to database
            require "connect.php";

            // prepare query
            $select = "SELECT * FROM `user_data`";
            // initiate query
            $transfer = mysqli_query($conn, $select);

            //fetch data
            while ($i = mysqli_fetch_assoc($transfer)){
                // extract all info, $i
                extract($i);
                echo "<tr>
                        <td>$name</td>
                        <td>$surname</td>
                        <td>$email</td>
                        <td>$nationality</td>
                        <td>$phone</td>
                        <td>$message</td>
                        <td><a class='btn btn-outline-danger' href='delete.php?del=$id' >DELETE</a></td>
                </tr>";

            };
        ?>

    </table>
</body>
</html>
