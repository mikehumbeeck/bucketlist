<?php
require_once("database_functions.php");
if (isset($_POST["register"])) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashtpwd = password_hash($password, PASSWORD_DEFAULT);

    $userexcist = new SQLCommand($sql = "select * from accounts.users where email = '$email'", $conn, $execute = true);

    if ($userexcist->result->num_rows > 0) {
        print "User already exist";
        header('location:' . ROOT_URL);;
    } else {
        $sc = new SQLCommand($sql = "insert into accounts.users SET first_name='$firstName' , last_name='$lastName' , email='$email' , password='$hashtpwd'", $conn, $execute = true);
        if ($sc) {
            echo "Success!";
            header('location:' . ROOT_URL);
        } else {
            //failure
            die("Database query failed. " . mysqli_error($conn));
        }
    }
}
?>


