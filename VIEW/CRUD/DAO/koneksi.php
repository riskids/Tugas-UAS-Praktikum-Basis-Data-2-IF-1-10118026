<?php
	$db = new mysqli("localhost:3306","root","","db_kampus_unikom");
	if ($db->connect_errno == 0) {
		echo "Sukses";
	}else{
		echo "Error" . $db->connect_errno . " : " . $db->connect_error . " <br> ";
	}
?>
