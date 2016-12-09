<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('Access Forbidden');
}

$siswa = new siswa();
$data = $siswa -> deletesiswa($id);

if(empty($data)){
	echo "data berhasil dihapus";
}
?>
</br><a href="siswa.php">kembali</a>