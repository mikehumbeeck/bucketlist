<?php

//Is de gebruiker nog aangemeld
if (!isset($_SESSION['auth'])) {
    header('location:' . ROOT_URL);
}