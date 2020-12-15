<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;

$serverName = "mssql-15738-0.cloudclusters.net,15746"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"Datos", "UID"=>"Datos", "PWD"=>"KB(ooLDTTlULlkzj0");
$con = sqlsrv_connect( $serverName, $connectionInfo);

if($con) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
 }

 echo "konnichi wa, sekai";
echo "hola mundo";
?>
Something is wrong with the XAMPP installation :-(
