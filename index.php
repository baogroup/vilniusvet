<?php
$config = require __DIR__ . '/config.php';

$lang = $_GET['lang'] ?? $config['default_lang'];
if (!in_array($lang, $config['languages'], true)) {
    $lang = $config['default_lang'];
}

$t = require __DIR__ . '/lang/' . $lang . '.php';
$services = require __DIR__ . '/data/services.php';
$posts = require __DIR__ . '/data/blog-posts.php';

$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'about', 'services', 'contacts', 'blog', 'privacy', 'cookies'];
if (!in_array($page, $allowedPages, true)) {
    http_response_code(404);
    $page = 'home';
}

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function tr(array $t, string $key): string {
    return $t[$key] ?? $key;
}

function url_for(string $page, string $lang): string {
    if ($page === 'home') {
        return 'index.php?lang=' . urlencode($lang);
    }
    return 'index.php?lang=' . urlencode($lang) . '&page=' . urlencode($page);
}

$pageTitles = [
    'home' => tr($t, 'hero.title'),
    'about' => tr($t, 'nav.about'),
    'services' => tr($t, 'nav.services'),
    'contacts' => tr($t, 'nav.contacts'),
    'blog' => tr($t, 'nav.blog'),
    'privacy' => tr($t, 'footer.privacy'),
    'cookies' => tr($t, 'footer.cookies'),
];

require __DIR__ . '/partials/header.php';
require __DIR__ . '/pages/' . $page . '.php';
require __DIR__ . '/partials/footer.php';
