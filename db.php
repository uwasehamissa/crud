<?php
$username = "if0_43040364";
$password = "";
$servername = "	sql300.infinityfree.com";
$database = "if0_43040364_tttt";
$connect = new mysqli("localhost", "root", "", "crud_example");
if ($connect->connect_error) {
    ("Connection failed: " . $connect->connect_error);
} else {
    echo "connected  successfully";
}
 