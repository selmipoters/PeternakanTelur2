<?php 
$con = mysqli_connect('localhost','root','','db_webcc');
$id = "aa";
$nama = $_POST['name'];
$email = $_POST['email'];
$nomor = $_POST['phone'];
$pesan = $_POST['message'];
//Creating an sql query 
mysqli_query($con, "INSERT INTO tbl_pesan VALUES ('$id','$nama','$email','$nomor','$pesan')");

 ?>