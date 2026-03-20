<?php
session_start();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tarikh = $_POST['tarikh'];
    $program = $_POST['program'];
    $jantina = $_POST['jantina'] ?? "";
    $alasan = $_POST['alasan'];
    $perakuan = $_POST['perakuan'] ?? "";

    if (empty($nama) || empty($umur) || empty($tarikh) || empty($program) || empty($jantina) || empty($alasan) || empty($perakuan) || strlen($alasan) < 25) {
        
        if (empty($nama) || empty($umur) || empty($tarikh) || empty($program) || empty($jantina) || empty($alasan) || empty($perakuan)) {
            $_SESSION['error'] = "Sila pastikan semua input diisi.";
        } else {
            $_SESSION['error'] = "Alasan mestilah sekurang-kurangnya 25 aksara.";
        }
        
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['data'] = [
            'nama' => $nama,
            'alasan' => $alasan
        ];
        header("Location: view.php");
        exit();
    }
}