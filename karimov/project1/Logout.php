<?php
session_start();
unset($_SESSION['is_user_loged_in']);
session_destroy();
$msg = "You are logged out";
header("Location: index.php?msg=$msg");
exit($msg);
