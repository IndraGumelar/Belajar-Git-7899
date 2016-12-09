<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new siswa();
$data = $siswa -> readAllsiswa();

$now = date('Y m d');
	
	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>

<h1>Data Siswa</h1>
<table border="1">
	<tr>
		<th>ID SSISWA</th>
		<th>FULL NAME</th>
		<th>DATE OF BIRTH</th>
		<th>AGE</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th>DETAIL</th>
		<th>DELETE</th>
		<th>EDIT</th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['date_ob']?></td>
		
		<td>
	
			<?php 
			if (empty($a['date_ob'])){
				echo '<font color="red">Data Lahir tidak Valid</font>';
			}
			else if ($a['date_ob'] == '0000-00-00'){
				echo '<font color="red">Data lahir tidak Valid</font>';
			}
			else{
				echo ($now)-($a['date_ob']).' Tahun';
			}
			
			?>
		
		</td>
		<td><?php echo $a['nationality']?></td>
		
		<td><a href="dsiswa.php?a=<?php echo $a['id_siswa'] ?>">
		Detail</a></td>
		
		<td><a href="hsiswa.php?id=<?php echo $a['id_siswa'] ?>">
		Delete</a></td>
		
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa'] ?>">
		Edit</a></td>
		
	</tr>
	<?php endforeach ?>

</table>