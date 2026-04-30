<?php
$articles = require __DIR__ . '/../data/articles.php';
$currentSlug = $_GET['article'] ?? '';
$article = null;

foreach ($articles as $item) {
    $itemSlug = $item['slugs'][$lang] ?? $item['slugs']['lt'];
    if ($itemSlug === $currentSlug) {
        $article = $item;
        break;
    }
}

if ($article === null) {
    http_response_code(404);
    echo '<section class="page-hero"><div class="container narrow"><h1>404</h1></div></section>';
    return;
}

$title = $article['title'][$lang] ?? $article['title']['lt'];
$content = $article['content'][$lang] ?? $article['content']['lt'];
?>
<section class="page-hero">
    <div class="container narrow">
        <h1><?= e($title) ?></h1>
        <p class="blog-date"><?= e($article['date']) ?></p>
    </div>
</section>
<section class="section">
    <div class="container article-content">
        <?php foreach ($content as $block): ?>
            <h2><?= e($block['h2']) ?></h2>
            <?php foreach ($block['p'] as $paragraph): ?>
                <p><?= e($paragraph) ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</section>
