<?php

// Konfigurasi database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "imam"; // Ganti dengan username database Anda
$password = "12345"; // Ganti dengan password database Anda
$dbname = "todolist"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}else
    echo "koneksi berhasil";

