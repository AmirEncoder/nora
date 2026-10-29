<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/includes/config.php';
$notice = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f3eee5">
  <meta name="description" content="نورا؛ مجله‌ای تصویری برای کشف مکان‌ها، آدم‌ها و ایده‌هایی که جهان را متفاوت می‌کنند.">
  <title>NOORA — جهان، از زاویه‌ای دیگر</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="announcement"><span class="pulse"></span> شماره‌ی تازه منتشر شد <span class="announcement-en">ISSUE Nº 08 — SLOW LIVING</span></div>
<header class="site-header">
  <a class="brand" href="index.php" aria-label="صفحه اصلی نورا"><span class="brand-mark">n.</span><span>NOORA<small>VISUAL JOURNAL</small></span></a>
  <nav class="main-nav" id="mainNav">
    <a href="#stories">داستان‌ها</a><a href="#collections">مجموعه‌ها</a><a href="#about">درباره نورا</a>
  </nav>
  <a class="header-cta" href="#newsletter">نامه‌ی نورا <span>↗</span></a>
  <button class="menu-toggle" id="menuToggle" aria-label="باز کردن منو">☰</button>
</header>

<main>
  <section class="hero">
    <div class="hero-copy">
      <div class="eyebrow"><span class="eyebrow-line"></span> مجله‌ای برای کنجکاوها</div>
      <h1>جهان را<br>از <em>زاویه‌ای</em><br>دیگر ببین.</h1>
      <p class="hero-description">از کافه‌ای پنهان در کوچه‌ای قدیمی تا خانه‌ای که با نور زندگی می‌کند؛ اینجا قصه‌هایی را پیدا می‌کنیم که ارزش مکث کردن دارند.</p>
      <div class="hero-actions"><a class="button button-dark" href="#stories">کشف داستان‌ها <span>↙</span></a><span class="read-note">۳ دقیقه برای شروع کافی‌ست</span></div>
      <div class="hero-meta"><span>۰۱ / ۰۸</span><span class="meta-rule"></span><span>فرهنگ · سفر · طراحی</span></div>
    </div>
    <div class="hero-visual">
      <div class="hero-image image-reveal" role="img" aria-label="خانه‌ای آرام در دل طبیعت"></div>
      <div class="image-caption"><span>01 — THE QUIET ESCAPE</span><span>پناهی میان سبزی</span></div>
      <div class="round-stamp"><span>STORIES<br>WORTH<br>YOUR TIME</span><b>✳</b></div>
      <div class="floating-note"><span class="note-dot"></span><span>جایی دور از عجله</span><small>ALENTEJO, PORTUGAL</small></div>
    </div>
    <div class="hero-side-label">A DIFFERENT POINT OF VIEW · 2026</div>
  </section>

  <section class="ticker" aria-label="موضوعات نورا"><div class="ticker-track"><span>فرهنگ روزمره</span><b>✳</b><span>معماری آرام</span><b>✳</b><span>سفر آهسته</span><b>✳</b><span>آدم‌های الهام‌بخش</span><b>✳</b><span>فرهنگ روزمره</span><b>✳</b><span>معماری آرام</span><b>✳</b><span>سفر آهسته</span><b>✳</b><span>آدم‌های الهام‌بخش</span><b>✳</b></div></section>

  <section class="stories section-wrap" id="stories">
    <div class="section-heading"><div><div class="eyebrow">THE LATEST FINDS</div><h2>چیزهایی برای <em>دیدن.</em></h2></div><a class="text-link" href="#collections">دیدن همه مجموعه‌ها <span>↙</span></a></div>
    <div class="story-grid">
      <article class="story-card story-large">
        <a href="#story-1" class="story-image img-cafe" aria-label="داستان کافه کوچک"></a>
        <div class="story-info"><div class="story-kicker"><span>فضا و مکان</span><span>۰۶ دقیقه</span></div><h3><a href="#story-1">یک فنجان قهوه، دور از هیاهوی شهر</a></h3><p>در گوشه‌ای آرام، جایی که زمان کمی آهسته‌تر می‌گذرد.</p><a href="#story-1" class="arrow-link">خواندن داستان <span>↙</span></a></div>
      </article>
      <article class="story-card story-middle">
        <a href="#story-2" class="story-image img-architecture" aria-label="معماری مینیمال"></a>
        <div class="story-info"><div class="story-kicker"><span>معماری</span><span>۰۴ دقیقه</span></div><h3><a href="#story-2">خانه‌ای که نور را مهمان می‌کند</a></h3><p>وقتی کم‌تر ساختن، بیشتر زندگی کردن است.</p><a href="#story-2" class="arrow-link">خواندن داستان <span>↙</span></a></div>
      </article>
      <article class="story-card story-small">
        <a href="#story-3" class="story-image img-market" aria-label="بازار گل رنگارنگ"></a>
        <div class="story-info"><div class="story-kicker"><span>زندگی روزمره</span><span>۰۳ دقیقه</span></div><h3><a href="#story-3">صبحی که با گل شروع شد</a></h3><p>رنگ‌هایی کوچک برای روزهایی بزرگ.</p><a href="#story-3" class="arrow-link">خواندن داستان <span>↙</span></a></div>
      </article>
    </div>
  </section>

  <section class="manifesto" id="about">
    <div class="manifesto-image" role="img" aria-label="منظره ساحلی و صخره‌ها"><span class="photo-index">FIG. 04 / COASTLINE</span></div>
    <div class="manifesto-copy"><div class="eyebrow">A NOTE FROM NOORA</div><h2>همه‌چیز قرار نیست<br><em>سریع</em> اتفاق بیفتد.</h2><p>نورا برای لحظه‌هایی ساخته شده که سرت را از صفحه بلند می‌کنی و دوباره به اطرافت نگاه می‌کنی. ما دنبال اتفاق‌های بزرگ نیستیم؛ دنبال جزئیاتی هستیم که زندگی را به‌یادماندنی می‌کنند.</p><a class="button button-outline" href="#newsletter">با نورا همراه شو <span>↙</span></a><div class="handwritten">take it slow ✳</div></div>
  </section>

  <section class="collections section-wrap" id="collections">
    <div class="section-heading"><div><div class="eyebrow">CURATED WORLDS</div><h2>هر بار، یک <em>جهان.</em></h2></div><p class="section-intro">مجموعه‌هایی کوچک و دقیق؛ برای وقت‌هایی که می‌خواهی از مسیر همیشگی بیرون بزنی.</p></div>
    <div class="collection-grid">
      <a class="collection-card collection-one" href="#stories"><span class="collection-number">01</span><span class="collection-title">جاهای پنهان <small>HIDDEN PLACES</small></span><span class="collection-arrow">↙</span></a>
      <a class="collection-card collection-two" href="#stories"><span class="collection-number">02</span><span class="collection-title">خانه و فرم <small>SPACES & FORMS</small></span><span class="collection-arrow">↙</span></a>
      <a class="collection-card collection-three" href="#stories"><span class="collection-number">03</span><span class="collection-title">زندگی آهسته <small>SLOW LIVING</small></span><span class="collection-arrow">↙</span></a>
    </div>
  </section>

  <section class="newsletter" id="newsletter">
    <div class="newsletter-orbit orbit-one"></div><div class="newsletter-orbit orbit-two"></div>
    <div class="newsletter-content"><div class="eyebrow">A LITTLE NOTE, SOMETIMES</div><h2>چیزهای خوب را<br>از دست <em>نده.</em></h2><p>هر چند وقت یک‌بار، چند داستان تازه و ایده‌ی دوست‌داشتنی در ایمیلت.</p>
      <?php if ($notice): ?><div class="form-notice"><?= htmlspecialchars((string)$notice, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
      <form class="newsletter-form" action="subscribe.php" method="post"><label class="sr-only" for="email">ایمیل شما</label><input id="email" type="email" name="email" placeholder="ایمیل تو..." required maxlength="190"><button type="submit">من هستم <span>↙</span></button></form>
      <small class="privacy-note">بدون اسپم. فقط چیزهای ارزشمند.</small>
    </div><div class="newsletter-graphic"><div class="graphic-sun"></div><div class="graphic-arch"></div><div class="graphic-plant">✳</div><span>KEEP<br>LOOKING.</span></div>
  </section>
</main>

<footer class="site-footer"><a class="brand footer-brand" href="#"><span class="brand-mark">n.</span><span>NOORA<small>VISUAL JOURNAL</small></span></a><p>برای چشم‌هایی که هنوز کنجکاوند.</p><div class="footer-links"><a href="#about">درباره</a><a href="#stories">داستان‌ها</a><a href="mailto:hello@example.com">تماس</a></div><span class="copyright">© 2026 NOORA — MADE FOR THE CURIOUS</span></footer>
<script src="assets/js/main.js"></script>
</body>
</html>
