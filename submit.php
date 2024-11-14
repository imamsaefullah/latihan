<?php
require_once "database.php"
if (isset($conn)){
    echo "konneksi berhasil";
}else
    echo "koneksi tidak berhasil";

//if (isset($conn)){
//    echo "berhasil konnek";
//}else
//    echo "koneksi tidak berhasil" . PHP_EOL;

//contoh tambilkan data
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];


//spill sting
echo $nama. PHP_EOL;
echo $email. PHP_EOL;
echo $nomor. PHP_EOL;
//

$q_insert = "INSERT INTO user (nama,email,nomor) values ('$nama','$email','$nomor')";
////
$run_q_insert = mysqli_query($conn, $q_insert);
if (isset($run_q_insert != true)){
    echo " data Tidak berhasil";
}else
    echo "data berhasil diinpur";