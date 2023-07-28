<?php 
require('incl/important.php');
session_start();
session_destroy();
redirect('index.php');
?>
