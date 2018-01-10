<?php
require_once("database_functions.php");
if (isset($_POST["check"])) {
    $theme = $_POST["theme"];
    $subject = $_POST["subject"];
    $place = $_POST["place"];
    $description = $_POST["description"];

    $userid = $_SESSION['user_id'];//gehaald uit check_login.php


    $sc = new SQLCommand($sql = "insert into accounts.list SET lis_user_id='$userid',lis_theme='$theme' , lis_subject='$subject' , lis_place='$place' , lis_description='$description' ", $conn, $execute = true);

}
?>