<?php 
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","php_pdo_mysql_crud");
	//officailDoc mechod => new PDO("mysql:host=localeconv(oid)host;dbname=testdbname",$dbuser,$dbpass);

	//ever connection can set with this try{...}catch{....} code block
 	try{
		$DB_conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
		$DB_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	include_once "curd.php";
	$curd = new myCURD($DB_conn);



 ?>