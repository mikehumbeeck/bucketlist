<?php
require_once("database_functions.php");

function deleteUser($id){
    global $conn;
    $sql1 = "DELETE FROM accounts.list WHERE lis_user_id='$id' ";
    $result = new SQLCommand($sql1, $conn, $execute=true);
    $sql2 = "DELETE FROM accounts.users WHERE id='$id' ";
    $result .= new SQLCommand($sql2, $conn, $execute=true);

    return $result;

}