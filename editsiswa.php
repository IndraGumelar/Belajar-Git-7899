<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbidden');
}

$siswa = new Siswa();
if($_FILES['in_foto']['error']==0){
	if(!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.png')){
		exit('Error Upload Files');
	}
}

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['input_foto'] = 'img/'.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data Siswa berhasil di update<br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Deatail Siswa</a>";
?>