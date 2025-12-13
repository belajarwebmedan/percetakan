<?php

session_start();

function respond_js($message, $location = 'login.php') {
    $loc = htmlspecialchars($location, ENT_QUOTES, 'UTF-8');
    $msg = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<script>alert(\"{$msg}\");window.location.href=\"{$loc}\";</script>";
    exit;
}

// koneksi database
$koneksi = mysqli_connect('localhost', 'root', '', 'db_percetakan');
if (!$koneksi) {
    respond_js('Koneksi database gagal. Silakan coba lagi nanti.');
}

// Periksa method dan input
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond_js('Request tidak valid.');
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($email) || empty($password)) {
    respond_js('Email dan password harus diisi.');
}

// Ambil user berdasarkan email menggunakan prepared statement
$stmt = mysqli_prepare($koneksi, "SELECT id_user, nama, email, password, role FROM users WHERE email = ?");
// echo "SELECT id_user, nama, email, password, role FROM users WHERE email = $email";
if (!$stmt) {
    respond_js('Gagal menyiapkan query. Silakan coba lagi.');
}
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    mysqli_stmt_close($stmt);
    respond_js('Gagal mengeksekusi query. Silakan coba lagi.');
}

$user = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$user) {
    // Jangan memperlihatkan detail, cukup gagal login
    respond_js('Email atau password salah.');
}

// Cek password: jika tersimpan sebagai hash (password_hash), gunakan password_verify.
// Jika tidak (plain text), bandingkan langsung (tidak direkomendasikan, tetapi mendukung migrasi).
$db_pass = $user['password'];
$login_ok = false;


// fallback: bandingkan plain text (case-sensitive)
if (sha1($password )== $db_pass) {
    $login_ok = true;
}

// echo $db_pass. "---".sha1($password);
// echo "--Login OK: " . ($login_ok ? 'true' : 'false');

if (!$login_ok) {
    respond_js('Email atau password salah.');
}

// Set session
$_SESSION['user'] = [
    'id_user' => $user['id_user'],
    'nama'    => $user['nama'],
    'email'   => $user['email'],
    'role'    => $user['role']
];

// (Opsional) Jika password tersimpan plain text, sarankan hashing otomatis.
// Namun lakukan ini hanya jika Anda yakin ingin mengubah isi DB:
// if (!password_verify($password, $db_pass) && strlen($db_pass) < 60) { ... }

// Berhasil login — redirect ke halaman utama
echo "<script>alert('Login berhasil. Selamat datang, " . htmlspecialchars($user['nama'], ENT_QUOTES, 'UTF-8') . "');window.location.href='http://localhost/percetakan/index.php?halaman=home';</script>";
exit;
?>