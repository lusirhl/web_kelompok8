<?php 
	$hostname = 'localhost:3307';
	$username = 'root';
	$password = '';
	$dbname   = 'db_bukawarung';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>