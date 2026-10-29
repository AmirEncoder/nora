<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#newsletter'); exit;
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$email) {
    $_SESSION['flash'] = 'لطفاً یک ایمیل معتبر وارد کن.';
    header('Location: index.php#newsletter'); exit;
}
$pdo = db();
if (!$pdo) {
    $_SESSION['flash'] = 'اتصال دیتابیس هنوز تنظیم نشده است. فایل راهنما را ببین.';
    header('Location: index.php#newsletter'); exit;
}
try {
    $stmt = $pdo->prepare('INSERT INTO subscribers (email) VALUES (:email) ON DUPLICATE KEY UPDATE email = VALUES(email)');
    $stmt->execute(['email' => $email]);
    $_SESSION['flash'] = 'عالیه! ایمیلت با موفقیت ثبت شد.';
} catch (Throwable $e) {
    error_log('NOORA subscribe error: ' . $e->getMessage());
    $_SESSION['flash'] = 'ثبت ایمیل انجام نشد؛ کمی بعد دوباره امتحان کن.';
}
header('Location: index.php#newsletter'); exit;
