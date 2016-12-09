<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if (!is_numeric($id)){
	exit('access for bidden');
}

$siswa = new siswa();
$data = $siswa -> readsiswa($id);

if(empty($data)){
	exit('data not found');
}

$dt = $data[0];

print_r($dt);
?>