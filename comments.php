<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'comments');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = $db->query("INSERT INTO comments (name, email, message) values ('$name', $email, $message)");





?>