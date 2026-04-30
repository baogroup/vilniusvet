<?php
$config = require __DIR__ . '/config.php';

$routes = [
    'lt' => [
        '' => 'home',
        'apie-mus' => 'about',
        'paslaugos-ir-kainos' => 'services',
        'kontaktai' => 'contacts',
        'tinklarastis' => 'blog',
        'privatumo-politika' => 'privacy',
        'slapuku-politika' => 'cookies',
    ],
    'en' => [
        '' => 'home',
        'about-us' => 'about',
        'services-prices' => 'services',
        'contacts' => 'contacts',
        'blog' => 'blog',
        'privacy-policy' => 'privacy',
        'cookie-policy' => 'cookies',
    ],
    'ru' => [
        '' => 'home',
        'o-nas' => 'about',
        'uslugi-ceny' => 'services',
        'kontakty' => 'contacts',
        'blog' => 'blog',
        'politika-konfidencialnosti' => 'privacy',
        'politika-cookies' => 'cookies',
    ],
];

$reverseRoutes = [];
foreach ($routes as $routeLang => $items) {
    foreach ($items as $slug => $routePage) {
        $reverseRoutes[$routeLang][$routePage] = $slug;
    }
}

$lang = $_GET['lang'] ?? $config['default_lang'];
if (!in_array($lang, $config['languages'], true)) {
    $lang = $config['default_lang'];
}

$slug = trim($_GET['slug'] ?? '', '/');
$page = $_GET['page'] ?? ($routes[$lang][$slug] ?? null);

$allowedPages = ['home', 'about', 'services', 'contacts', 'blog', 'privacy', 'cookies'];
if (!in_array($page, $allowedPages, true)) {
    http_response_code(404);
    $page = 'home';
}

$t = require __DIR__ . '/lang/' . $lang . '.php';
$services = require __DIR__ . '/data/services.php';
$posts = require __DIR__ . '/data/blog-posts.php';

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function tr(array $t, string $key): string {
    return $t[$key] ?? $key;
}

function url_for(string $page, string $lang): string {
    global $reverseRoutes;
    $slug = $reverseRoutes[$lang][$page] ?? '';
    return '/' . rawurlencode($lang) . ($slug !== '' ? '/' . rawurlencode($slug) : '') . '/';
}

function absolute_url_for(string $page, string $lang): string {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'vilnius.vet';
    return $scheme . '://' . $host . url_for($page, $lang);
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

$metaDescription = [
    'home' => tr($t, 'hero.text'),
    'about' => tr($t, 'about.full.lead'),
    'services' => tr($t, 'services.lead'),
    'contacts' => tr($t, 'contacts.lead'),
    'blog' => tr($t, 'blog.lead'),
    'privacy' => tr($t, 'footer.privacy'),
    'cookies' => tr($t, 'footer.cookies'),
][$page] ?? tr($t, 'hero.subtitle');

require __DIR__ . '/partials/header.php';
require __DIR__ . '/pages/' . $page . '.php';
require __DIR__ . '/partials/footer.php';
