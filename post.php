<?php
declare(strict_types=1);
session_start();
if($_POST['name']) {
    $_SESSION['name'] = $_POST['name'];
}
header('Location: index.php');