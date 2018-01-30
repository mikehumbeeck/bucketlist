<?php
require_once("database_functions.php");
//Huplfuncties
/*
 * Er wordt een functie gemaakt om na te gaan of de betreffende list-id wel degelijk bij de user hoort
 * Bij een resultaat wordt er true teruggestuurd, anders false*/
function isItemlinkedToUser($list_id){
    global $conn;
    $user_id = $_SESSION['user_id'];
    $sql = "select * from accounts.list where lis_user_id = '$user_id' and lis_id = '$list_id'";
    $sqlCommand= new SQLCommand($sql, $conn, $execute=true);

    return count($sqlCommand->result) ? true : false;


}