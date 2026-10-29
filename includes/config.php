<?php
declare(strict_types=1);
// اطلاعات اتصال دیتابیس را بعد از ساخت دیتابیس در cPanel وارد کنید.
define('DB_HOST', 'localhost');
define('DB_NAME', 'CPANEL_DATABASE_NAME');
define('DB_USER', 'CPANEL_DATABASE_USER');
define('DB_PASS', 'CHANGE_THIS_PASSWORD');

function db(): ?PDO {
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;
    if (DB_NAME === 'CPANEL_DATABASE_NAME' || DB_USER === 'CPANEL_DATABASE_USER') return null;
    try {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
        return $pdo;
    } catch (Throwable $e) {
        error_log('NOORA database connection failed: ' . $e->getMessage());
        return null;
    }
}
