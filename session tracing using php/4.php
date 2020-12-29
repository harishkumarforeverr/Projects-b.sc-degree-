<?php
session_start();
session_destroy();
header('location:http://localhost/pc/1.php');
?>