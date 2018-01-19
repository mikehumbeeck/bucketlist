<?php
if (!isset($_SESSION['auth'])) {
    header('location:' . ROOT_URL);
}