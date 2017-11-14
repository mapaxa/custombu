<?php 

//создать папку 
$bu_path = __DIR__ .'/backup/' ;
if(!file_exists($bu_path)) {
	mkdir($bu_path, 0777);
}
//создать файл
$filename = 'mysqldump_BU_' . date('ymd') . '.sql';
$full_bu_path = $bu_path.$filename; 
//echo $full_bu_path;
//подключить к БД
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



