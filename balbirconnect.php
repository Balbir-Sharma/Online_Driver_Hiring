<?php 
error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password  = '';
$dbname   ='kbsdrive';
$connn = mysqli_connect($servername, $username, $password, $dbname  );

if($connn)
{
//echo "conction ok" ;
}
else{
    echo " failed".mysqli_connect_error();
}
?>