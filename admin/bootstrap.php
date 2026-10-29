<?php
declare(strict_types=1); session_start(); require_once dirname(__DIR__).'/includes/config.php';
function db(): PDO { static $p=null; if(!$p){$p=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);} return $p; }
function h($s): string{return htmlspecialchars((string)$s,ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8');}
function token(): string{if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function check_token(): void{if(!hash_equals(token(),(string)($_POST['csrf']??''))){http_response_code(403);exit('درخواست نامعتبر است؛ صفحه را تازه‌سازی کنید.');}}
function auth(): void{if(empty($_SESSION['admin_id'])){header('Location: login.php');exit;}}
function head($title): void{echo '<!doctype html><html lang="fa" dir="rtl"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>'.h($title).' | NOORA</title><link rel="stylesheet" href="admin.css"><body><header><b>NOORA <small>مدیریت</small></b><nav><a href="../" target="_blank">مشاهده سایت ↗</a>　<a href="logout.php">خروج</a></nav></header><div class="layout"><aside><a href="index.php">داشبورد</a><a href="articles.php">مقاله‌ها</a><a href="subscribers.php">خبرنامه</a><a href="password.php">تغییر رمز</a></aside><main><h1>'.h($title).'</h1>';}
function foot(): void{echo '</main></div><footer>NOORA · پنل مدیریت</footer></body></html>';}
