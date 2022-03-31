<?php
 include_once "core/init.php";

$session->destroy();
//echo "signed out";
header("Location: index.php");
?>