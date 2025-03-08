<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'chatApp';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_url = 'http://localhost/myChat/';

if($config)
{
	echo "";
}
else
{
	echo "Failed to Connect Database. Error ".mysqli_connect_error();
}

?>