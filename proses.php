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
$alasan = trim($_POST['alasan'] ?? '');
$pengesahan = $_POST['pengesahan'] ?? '';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['errors'] = ["Sila hantar borang dahulu"];
    header("Location: index.php");
    exit();
} elseif ($nama == '') {
    $_SESSION['errors'] = ["Sila masukkan Nama"];
    header("Location: index.php");
    exit();
} elseif ($matrik == '') {
    $_SESSION['errors'] = ["Sila masukkan No Matriks"];
    header("Location: index.php");
    exit();
} elseif ($no_tel == '' || !preg_match('/^[0-9]{10,11}$/', $no_tel)) {
    $_SESSION['errors'] = ["No Telefon diperlukan (10-11 digit)"];
    header("Location: index.php");
    exit();
} elseif ($tarikh == '') {
    $_SESSION['errors'] = ["Sila masukkan Tarikh"];
    header("Location: index.php");
    exit();
} elseif ($program == '') {
    $_SESSION['errors'] = ["Sila pilih Program"];
    header("Location: index.php");
    exit();
} elseif ($jantina == '') {
    $_SESSION['errors'] = ["Sila pilih Jantina"];
    header("Location: index.php");
    exit();
} elseif (strlen($alasan) < 25) {
    $_SESSION['errors'] = ["Alasan mesti sekurang-kurangnya 25 aksara"];
    header("Location: index.php");
    exit();
} elseif (empty($pengesahan)) {
    $_SESSION['errors'] = ["Sila tandakan pengesahan"];
    header("Location: index.php");
    exit();
} else {
    $_SESSION['success_data'] = [
        'nama' => htmlspecialchars($nama),
        'matrik' => htmlspecialchars($matrik),
        'no_tel' => htmlspecialchars($no_tel),
        'tarikh' => htmlspecialchars($tarikh),
        'program' => htmlspecialchars($program),
        'jantina' => htmlspecialchars($jantina),
        'alasan' => htmlspecialchars($alasan)
    ];
    
    unset($_SESSION['inputs']);
    header("Location: view.php");
    exit();
}