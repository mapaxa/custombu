<?php 

$bu_path = __DIR__ .'/backup' ;
echo $bu_path;
if(file_exists($bu_path)) {
	
}


class Db {
	public static function getConnection() {
		$params =  array(
			'host' => 'localhost',
			'dbname'=>'module3',
			'user'=>'mapaxa',
			'password'=>'315120');
		$dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);
		
		$db->exec("set names utf8");
		return $db;
	}
}