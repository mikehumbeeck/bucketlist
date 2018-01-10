<?php
/**
 * Created by PhpStorm.
 * User: mikehumbeeck
 * Date: 21/12/2017
 * Time: 14:59
 */

// Check if user with that email already exists
$result = new DataSet( $sql = "SELECT * FROM users WHERE email='email'", $conn, $load = true );

?>