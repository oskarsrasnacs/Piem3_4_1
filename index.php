
<?php 

define('DB_NAME', 'Viesu');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$link=mysqli_connect('DB_HOST','DB_USER','DB_PASSWORD');

if (!$link){
die('Diemžēl nevar savienot!'.mysqli_error());	
}

$db_selected=mysqli_select_db(DB_NAME,$link);

if (!$db_selected){
	die('Diemžēl nevar lietot!'.DB_NAME.':'.mysqli_error());	
	}

?>
