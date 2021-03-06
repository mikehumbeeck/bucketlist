<?php
require_once("database_functions.php");
require_once("helperfunctions.php");

/*Een aantal functies op de listitems.  */
function getlistitem($list_id)
{
    global $conn;

    if (isItemlinkedToUser($list_id)) {
        $sql = "SELECT * from accounts.list WHERE lis_id=$list_id";
        $result = new DataSet($sql, $conn, $load = true);
        $rows = $result->rows;

        $item = [
            "theme" => $rows[0]["lis_theme"],
            "subject" => $rows[0]["lis_subject"],
            "place" => $rows[0]["lis_place"],
            "description" => $rows[0]["lis_description"],
            "link" => $rows[0]["lis_link"]
        ];
        return $item;
    } else {
        return "listitem not found";
    }

}

function deletelistitem($list_id)
{
    global $conn;

    if (isItemlinkedToUser($list_id)) {
        $sql = "DELETE FROM accounts.list WHERE lis_id='$list_id' ";
        new SQLCommand($sql, $conn, $execute = true);
        return true;
    } else {
        return false;
    }

}

function checkItem($list_id, $check)
{
    global $conn;

    if (isItemlinkedToUser($list_id)) {
        $sql = "UPDATE accounts.list SET lis_done = '$check' WHERE lis_id= '$list_id'";
        $update = new SQLCommand($sql, $conn, $execute = true);
        if ($update && mysqli_affected_rows($conn) == 1) { //Where id = ... dus er mag maar één rij wijzigen in de DB
            echo "Success!";
            return true;
        } else {
            //update failure
            die("Database query failed. " . mysqli_error($conn));
        }
    } else {
        return false;
    }

}

function uncheckItem($list_id)
{
    global $conn;

    if (isItemlinkedToUser($list_id)) {
        $sql = "UPDATE accounts.list SET lis_done = '0' WHERE lis_id= '$list_id'";
        $update = new SQLCommand($sql, $conn, $execute = true);
        if ($update && mysqli_affected_rows($conn) == 1) { //Where id = ... dus er mag maar één rij wijzigen in de DB
            echo "Success!";
            return true;
        } else {
            //update failure
            die("Database query failed. " . mysqli_error($conn));
        }
    } else {
        return false;
    }
}

?>