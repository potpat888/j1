<?php
	$host = "localhost" ;				// ชื่อโฮสต์
	$user = "root" ;					// ชื่อผู้ใช้
	$pwd="12345678P" ;					// รหัสผ่าน
	$dbName = "shop4633" ;			// ชื่อฐานข้อมูล

	$conn = mysqli_connect($host , $user, $pwd) or die ("ติดต่อฐานข้อมูลล้มเหลว") ;
	mysqli_query($conn, "SET NAMES utf8") ;
	mysqli_select_db($conn, $dbName) or die ("เลือกฐานข้อมูลล้มเหลว") ;	

	if (empty($_GET['c_id'])) {
		$_GET['c_id'] = 1 ;
	}
?>