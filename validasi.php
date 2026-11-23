<?php
$error = [];
$judul = trim($_POST['judul'] ?? '');
$tahun = (int) ($_POST['tahun'] ?? 0);
$email = trim($_POST['email'] ?? '');
if ($judul === '') $error[] = 'Judul wajib diisi.';
if ($tahun < 1900 || $tahun > (int) date('Y')) $error[] = 'Tahun tidak valid.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error[] = 'Email tidak valid.';
?>