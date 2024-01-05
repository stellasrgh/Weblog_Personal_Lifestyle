<!-- Ini adalah langkah kedua setelah dari FORM_PORTFOLIO.PHP -->
<!-- selanjutnya ke tabel_portfolio -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="judul_portfolio" dr form_portfolio.php
// untuk membuat nama secara random hrs menggunakan time(); dgn ekstensi ".jpg"
$vnama=$_POST['name'];
$vemail = $_POST['email'];
$vsubject = $_POST['subject'];
$vmessage= $_POST['message'];

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (judul_portfolio, img, link, deskripsi) adalah nama2 kolom database
// ('$vjudul','$vimg','$vlink','$vdeskripsi') adalah variebel di atas yang sudah kita bikin sebelumnya.


$sql_insert = mysqli_query($koneksi,"INSERT INTO message(name,email,subject,message) 
values ('$vnama','$email','$vsubject','$vmessage')");

// header location untuk mengarahkan halaman ke tabel_profile
header("Location:contact.php");
