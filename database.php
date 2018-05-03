<?php  
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "tasklist";

try
{
	$DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
	$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
	echo "ERRO : ".$e->getMessage();
}



$connect=mysqli_connect('localhost','root','','tasklist');
 
if(mysqli_connect_errno($connect))
{
	echo 'Conexao com database falhou';
}
 
?>