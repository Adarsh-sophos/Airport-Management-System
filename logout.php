<?php
session_start();
$_SESSION["id"] = 0;
session_unset();
session_destroy();
header('Location:/');
?>