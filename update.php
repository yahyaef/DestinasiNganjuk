<?php
//koneksi database
include 'config/koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

//update data ke database
mysqli_query($koneksi, "UPDATE user_form SET name='$name', email='$email', password='$pass'" );

header("location:profil.php");

?>