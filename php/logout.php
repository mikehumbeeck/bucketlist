<?php
session_start();
require_once("connection.php");
session_destroy();
header("location:" . ROOT_URL );
?>