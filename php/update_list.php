<?php
require_once("database_functions.php");
function getlistitem($list_id){
    global $conn;
    $sql = "SELECT * from accounts.list WHERE lis_id=$list_id";
    $result = new DataSet($sql, $conn, $load=true);
    $rows = $result->rows;

    $item = [
        "theme" => $rows[0]["lis_theme"],
        "subject" => $rows[0]["lis_subject"],
        "place" => $rows[0]["lis_place"],
        "description" => $rows[0]["lis_description"]
    ];

    return $item;
}

function deletelistitem($list_id){
    global $conn;
    $sql = "DELETE FROM accounts.list WHERE lis_id='$list_id' ";
    $result= new SQLCommand($sql, $conn, $execute=true);

    return $result;

}

?>