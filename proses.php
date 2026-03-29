<?php
session_start();
$_SESSION['inputs'] = $_POST;
unset($_SESSION['errors']);

$nama = trim($_POST['nama'] ?? '');
$matrik = trim($_POST['matrik'] ?? '');
$no_tel = trim($_POST['no_tel'] ?? '');
$tarikh = trim($_POST['tarikh'] ?? '');
$program = trim($_POST['program'] ?? '');
$jantina = trim($_POST['jantina'] ?? '');
$laptop = trim($_POST['laptop'] ?? '');
$tempoh = trim($_POST['tempoh'] ?? '');
$alasan = trim($_POST['alasan'] ?? '');
$pengesahan = $_POST['pengesahan'] ?? '';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['errors'] = ["Akses tidak sah."];
    header("Location: index.php"); exit();
} elseif ($nama == '') {
    $_SESSION['errors'] = ["Sila masukkan Nama Penuh."];
    header("Location: index.php"); exit();
} elseif ($matrik == '') {
    $_SESSION['errors'] = ["Sila masukkan No Matriks."];
    header("Location: index.php"); exit();
} elseif ($no_tel == '') {
    $_SESSION['errors'] = ["Sila masukkan No Telefon."];
    header("Location: index.php"); exit();
} elseif (!preg_match('/^[0-9]{10,11}$/', $no_tel)) {
    $_SESSION['errors'] = ["No Telefon tidak sah (10-11 digit)."];
    header("Location: index.php"); exit();
} elseif ($tarikh == '') {
    $_SESSION['errors'] = ["Sila pilih Tarikh Lahir."];
    header("Location: index.php"); exit();
} elseif ($program == '') {
    $_SESSION['errors'] = ["Sila pilih Program."];
    header("Location: index.php"); exit();
} elseif ($jantina == '') {
    $_SESSION['errors'] = ["Sila pilih Jantina."];
    header("Location: index.php"); exit();
} elseif ($laptop == '') {
    $_SESSION['errors'] = ["Sila pilih model Laptop."];
    header("Location: index.php"); exit();
} elseif ($tempoh == '') {
    $_SESSION['errors'] = ["Sila masukkan Tempoh Pinjaman."];
    header("Location: index.php"); exit();
} elseif (strlen($alasan) < 25) {
    $_SESSION['errors'] = ["Alasan mestilah sekurang-kurangnya 25 aksara."];
    header("Location: index.php"); exit();
} elseif (empty($pengesahan)) {
    $_SESSION['errors'] = ["Sila tandakan kotak Pengesahan."];
    header("Location: index.php"); exit();
} else {
    $_SESSION['success_data'] = [
        'Nama' => htmlspecialchars($nama), 'Matrik' => htmlspecialchars($matrik),
        'Telefon' => htmlspecialchars($no_tel), 'Tarikh' => htmlspecialchars($tarikh),
        'Program' => htmlspecialchars($program), 'Jantina' => htmlspecialchars($jantina),
        'Laptop' => htmlspecialchars($laptop), 'Tempoh' => htmlspecialchars($tempoh) . " Bulan",
        'Alasan' => htmlspecialchars($alasan)
    ];
    unset($_SESSION['inputs']);
    header("Location: view.php"); exit();
}