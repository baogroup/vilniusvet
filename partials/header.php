<!doctype html>
<html lang="<?= e($lang) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitles[$page] ?? $config['site_name']) ?> | <?= e($config['site_name']) ?></title>
    <meta name="description" content="<?= e(tr($t, 'hero.subtitle')) ?>. <?= e($config['address']) ?>.">
    <link rel="stylesheet" href="assets/css/style.css">
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
