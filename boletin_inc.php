<?php
require_once ("conf/config.php");
require_once ("utilidades/adodb.php");
require_once ("utilidades/adodb/adodb.inc.php");

$db = NewADOConnection($CONF['CONF_DB_TYPE']);
$db->Connect($CONF['CONF_DB_HOST'],$CONF['CONF_DB_USER'],$CONF['CONF_DB_PASS'],$CONF['CONF_DB_NAME']);
$db -> debug = false;

if ($_GET['id']!="") {
	$sqlAux = " AND id_contenido='" . $_GET['id'] . "' ";
}

$resultSemana = $db -> Execute("SELECT * FROM `contenido` WHERE 1 " . $sqlAux . " ORDER BY fecha_actualizacion DESC LIMIT 1");

if ($resultSemana -> RecordCount() > 0) {
	while ($row = $resultSemana -> FetchRow()) {
		$id_contenido= $row['id_contenido'];	
		$imagen_boletin = $row['imagen_boletin'];
		$texto_contenido = $row['texto_contenido'];
		$texto_contenido_vermas = $row['texto_contenido_vermas'];
		$nombre_boletin = $row['nombre_boletin'];
		$titulo = $row['titulo'];
	}
}

//los boletines
$resultSemana = $db -> Execute("SELECT * FROM `contenido` ORDER BY fecha_actualizacion DESC");

if ($resultSemana -> RecordCount() > 0) {
	$boletines = $resultSemana -> RecordCount();
	while ($row2 = $resultSemana -> FetchRow()) {
		$boletinid[] = $row2[id_contenido];
		$boletinombre[] = $row2[titulo];
	}
}
?>