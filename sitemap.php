<?php
$config = require __DIR__ . '/config.php';

$routes = [
    'lt' => ['', 'apie-mus', 'paslaugos-ir-kainos', 'kontaktai', 'tinklarastis', 'privatumo-politika', 'slapuku-politika'],
    'en' => ['', 'about-us', 'services-prices', 'contacts', 'blog', 'privacy-policy', 'cookie-policy'],
    'ru' => ['', 'o-nas', 'uslugi-ceny', 'kontakty', 'blog', 'politika-konfidencialnosti', 'politika-cookies'],
];

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'vilnius.vet';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($routes as $lang => $slugs): ?>
<?php foreach ($slugs as $slug): ?>
    <url>
        <loc><?= htmlspecialchars($scheme . '://' . $host . '/' . $lang . ($slug ? '/' . $slug : '') . '/', ENT_XML1, 'UTF-8') ?></loc>
        <changefreq><?= $slug === '' || $slug === 'tinklarastis' || $slug === 'blog' ? 'weekly' : 'monthly' ?></changefreq>
        <priority><?= $slug === '' ? '1.0' : '0.8' ?></priority>
    </url>
<?php endforeach; ?>
<?php endforeach; ?>
</urlset>
