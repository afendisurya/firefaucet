<?php
include('config.php');
//EC-UserId-
$cari_kata = strpos($EC, '-');
$cari_file = file_exists('config.php');


if ($cari_file){
	echo "\nFile Ada";
}else{
	echo "\nFile Tidak Ada";
}

	if ($cari_kata == 2){
			echo "\nConfig Benar";
		//	echo "\n".$cari_kata;
		}else{
			echo "\nConfig Salah";
		//	echo "\n".$cari_kata;
	}
?>
