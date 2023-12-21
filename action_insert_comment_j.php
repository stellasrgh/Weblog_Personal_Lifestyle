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
$vnamaimage = time() . ".jpg";
// untuk menyimpan file foto yang nanti tambahkn dari file form_portfolio
$path="foto_komen/";

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (judul_portfolio, img, link, deskripsi) adalah nama2 kolom database
// ('$vjudul','$vimg','$vlink','$vdeskripsi') adalah variebel di atas yang sudah kita bikin sebelumnya.


// untuk meng upload foto digunakan fungsi move_uploaded_file
move_uploaded_file($_FILES['photo']['tmp_name'], $path . $vnamaimage);

$sql_insert = mysqli_query($koneksi,"INSERT INTO comment_jayanta(name,email,subject,message, photo) 
values ('$vnama','$email','$vsubject','$vmessage', '$vnamaimage')");

// header location untuk mengarahkan halaman ke tabel_profile
header("Location:form_comment_jayanta.php");
