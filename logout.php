<?php

session_start();
session_unset();
session_destroy();
/*var_dump($_SESSION);
die;*/
header('location:login.php');


?>