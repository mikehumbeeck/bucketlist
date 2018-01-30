<?php
require_once ("database_functions.php");

//Login controleren


if (! isset($_POST["login"]) or ! isset($_POST["password"])) {
    print "Not logged in";
    exit;
}

$email = $_POST["email"];
$user_password = $_POST["password"];

$ds1 = new DataSet("SELECT * FROM accounts.users WHERE email='$email'", $conn, $load = true);
$user_data = $ds1->rows;
$pwdcheck = password_verify($user_password, $user_data[0]['password']);//return true of false


if (count($ds1->rows) == 0) {
    print "Foutieve login of wachtwoord";
    exit;
}
foreach ( $ds1->rows as $row) {
//Sessie-variabele instellen -- vergeet bovenaan geen sessie te starten
    if ($pwdcheck) {
        echo 'loged in';
        $_SESSION['user_id'] = $user_data[0]['id'];
        $_SESSION['user_name'] = $user_data[0]['first_name'];
        $_SESSION['auth'] = True;
        header('Location:' . ROOT_URL . 'home.php');
    }
    else {
        echo 'error - Go back and try again!';
    }
}
?>