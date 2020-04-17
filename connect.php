<?php
//connect to database

$conn = mysqli_connect("localhost", "root", "", "contact");

if(!$conn){
    die("Connection Failed");
}