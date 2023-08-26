<?php
session_start();
session_destroy();
header("Location: companylogin.php");
exit;
?>
