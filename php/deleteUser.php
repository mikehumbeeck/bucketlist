<?php
require_once("database_functions.php");

/*
 * Functie om user te verwijderen
 * Is de opgeslagen (sessie) user-id gelijk aan de binnenkomende id?
 * Zoja wordt deze id verwijderd uit de db (true wordt dan teruggegeven)*/
function deleteUser($id){
    global $conn;
    if ($_SESSION['user_id'] == $id) {
        $sql2 = "DELETE FROM accounts.users WHERE id='$id' ";
        new SQLCommand($sql2, $conn, $execute=true);
        return true;
    } else {
        return false;
    }
}