<?php
use proxy\Db as Db;

require(__DIR__ . '/../../src/config/config.php');
header( 'Content-type: text/html; charset=windows-1251' );
header('Cache-Control: no-cache');
if(isset($_GET['renderer'])) {
	$renderer = $_GET['renderer'];
} else if(isset($_POST['renderer'])) {
	$renderer = $_POST['renderer'];
} else {
	$renderer = NULL;
}
if(isset($_GET['id'])) {
	$token = $_GET['id'];
} else if(isset($_POST['id'])) {
	$token = $_POST['id'];
} else {
	$token = NULL;
}

Db::where('teg_id', $token);
$query = Db::getOne('spec_category', 'text');



print $query['text'];