<?php
require_once ("database_functions.php");

//Teams ophalen en tonen
print "<h3>Users</h3>";

$ds1 = new DataSet( $sql = "SELECT * FROM list", $conn, $load = true );
foreach ( $ds1->rows as $row)
{
    //echo "first_name: " . $row["first_name"]. " - last_name: " . $row["last_name"] . " - email: " . $row["email"] . "<br>"; //output
    print_r($row);
}

/*
$firstName = $_POST["first_name"];
$lastName= $_POST["last_name"];
$email = $_POST["email"];

$sc = new SQLCommand($sql = "insert into accounts.users SET first_name='$firstName' , last_name='$lastName' , email='$email' ", $conn, $execute = true);


//een SQL INSERT commando uitvoeren
$sc = new SQLCommand( $sql = "insert into users SET tea_naam='Waasland-Beveren' ", $conn, $execute = true);

echo "<br><small>Deze pagina is <b>" . basename($_SERVER['PHP_SELF']) . "</b></small>";
?>*/