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

/*if (isset($_POST["update"])) {
    $listid =;
    $theme =;
    $subject =;
    $place=;
    $description=;

    // nog niet af!
    $sql = "UPDATE accounts.list SET ";
    $sql .= "lis_theme = '{$theme}', ";
    $sql .= "lis_subject = '{$subject}', ";
    $sql .= "lis_place = '{$place}', ";
    $sql .= "lis_description = '{$description}' ";
    $sql .= "WHERE lis_id = '{$listid}' ";

    $result = mysqli_query($conn, $execute = true);

    if ($result && mysqli_affected_rows($conn) == 1) { //Where id = ... dus er mag maar één rij wijzigen in de DB
        echo "Success!";
    } else {
        //update failure
        die("Database query failed. " . mysqli_error($conn));
    }
}*/

/*if (isset($_POST["delete"])) {
    $listid =;

    // nog niet af!
    $sql = "DELETE FROM  accounts.list ";
    $sql .= "WHERE lis_id = '{$listid}' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($conn, $execute = true);

    if ($result && mysqli_affected_rows($conn) == 1) { //Where id = ... dus er mag maar één rij wijzigen in de DB
        echo "Success!";
    } else {
        //delete failure
        die("Database query failed. " . mysqli_error($conn));
    }
}*/
?>