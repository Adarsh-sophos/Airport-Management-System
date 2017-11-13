<?php
session_start();
$_SESSION["id"] = 0;
session_unset();
session_destroy();
header('Location:https://ide50-sakshamagarwal51d3.cs50.io');
?>