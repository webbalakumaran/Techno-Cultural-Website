<?php
session_start();
session_unset();
session_destroy();
// header("location: ../index.php");
// header("location:javascript://history.go(-1)");
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
