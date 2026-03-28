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

$rules = [
    ($nama == '') => "Sila masukkan Nama",
    ($matrik == '') => "Sila masukkan No Matriks",
    ($no_tel == '') => "Sila masukkan No Telefon",
    (!preg_match('/^[0-9]{10,11}$/', $no_tel)) => "No Telefon mesti 10 atau 11 digit",
    ($tarikh == '') => "Sila masukkan Tarikh",
    ($program == '') => "Sila pilih Program",
    ($jantina == '') => "Sila pilih Jantina",
    ($alasan == '') => "Sila masukkan Alasan",
    (strlen($alasan) < 25) => "Alasan mesti sekurang-kurangnya 25 aksara",
    (empty($pengesahan)) => "Sila tandakan pengesahan"
];

$failed = array_values(array_filter($rules, function ($condition) {
    return $condition;
}, ARRAY_FILTER_USE_KEY));

if (!empty($failed) || $_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['errors'] = !empty($failed) ? [$failed[0]] : ["Sila hantar borang dahulu"];
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
