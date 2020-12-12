<?php 

 session_start();
 
$_SESSION['message'] = 'Success Message';

header('location: index.php');

die();