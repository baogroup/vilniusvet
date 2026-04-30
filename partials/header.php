<!doctype html>
<html lang="<?= e($lang) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitles[$page] ?? $config['site_name']) ?> | <?= e($config['site_name']) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <link rel="canonical" href="<?= e(absolute_url_for($page, $lang)) ?>">
    <?php foreach ($config['languages'] as $altLang): ?>
        <link rel="alternate" hreflang="<?= e($altLang) ?>" href="<?= e(absolute_url_for($page, $altLang)) ?>">
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= e(absolute_url_for($page, $config['default_lang'])) ?>">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'VeterinaryCare',
        'name' => $config['site_name'],
        'legalName' => $config['company_name'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Siesikų g. 15',
            'addressLocality' => 'Vilnius',
            'postalCode' => '07170',
            'addressCountry' => 'LT',
        ],
        'telephone' => $config['phone'],
        'email' => $config['email'],
        'url' => absolute_url_for('home', $lang),
        'openingHours' => ['Mo-Fr 09:00-19:00', 'Sa 09:00-15:00'],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= e(url_for('home', $lang)) ?>">
            <span class="brand-mark">VV</span>
            <span>
                <strong><?= e($config['site_name']) ?></strong>
                <small><?= e(tr($t, 'hero.subtitle')) ?></small>
            </span>
        </a>
        <?php require __DIR__ . '/nav.php'; ?>
    </div>
</header>
<main>
