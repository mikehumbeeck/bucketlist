<?php
require_once("database_functions.php");
require_once("is_authenticated.php");


if (isset($_POST["check"])) {
    $theme = $_POST["theme"];
    $subject = $_POST["subject"];
    $place = $_POST["place"];
    $description = $_POST["description"];

    $userid = $_SESSION['user_id'];//gehaald uit check_login.php

    //controleren of listid bestaat in DB
    if (isset($_POST["listid"])) {
        //Zoja voer een updatequery uit
        $listid = $_POST["listid"];

        $sql = "UPDATE accounts.list SET ";
        $sql .= "lis_theme = '{$theme}', ";
        $sql .= "lis_subject = '{$subject}', ";
        $sql .= "lis_place = '{$place}', ";
        $sql .= "lis_description = '{$description}' ";
        $sql .= "WHERE lis_id = '{$listid}'";

        $update = new SQLCommand($sql, $conn, $execute = true);

        if ($update && mysqli_affected_rows($conn) == 1) { //Where id = ... dus er mag maar één rij wijzigen in de DB
            echo "Success!";
            header('Location:' . ROOT_URL . 'home.php');

        } else {
            //update failure
            die("Database query failed. " . mysqli_error($conn));
        }

    } else {
        //Bestaat id niet, doe een insert
        $sc = new SQLCommand($sql = "insert into accounts.list SET lis_user_id='$userid',lis_theme='$theme' , lis_subject='$subject' , lis_place='$place' , lis_description='$description' ", $conn, $execute = true);
        header('Location:' . ROOT_URL . 'home.php');

    }
}

?>