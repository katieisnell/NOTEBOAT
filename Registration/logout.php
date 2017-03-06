<?php
session_start();
session_destroy();
header('Location: loginTest.php');
?>
