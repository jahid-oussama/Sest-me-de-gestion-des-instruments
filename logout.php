<?php
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start();

$_SESSION = [];
session_unset();
session_destroy();
header('location: first.php');
