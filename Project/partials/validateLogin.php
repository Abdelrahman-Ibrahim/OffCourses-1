<?php

if (!isset($_SESSION['user'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}