<?php
declare(strict_types=1);
session_start();
if(isset($_SESSION['name'])) {
    echo "Привет {$_SESSION['name']}!!</br>";
    echo  "<a href='exit.php'>Очитстить</a>";
} else {
    $form = include ('./form.php');
    echo $form;
}