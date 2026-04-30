<?php
$articles = require __DIR__ . '/../data/articles.php';
$blogBase = url_for('blog', $lang);
?>

<section class="page-hero">
    <div class="container narrow">
        <h1><?= e(tr($t, 'nav.blog')) ?></h1>
        <p class="lead"><?= e(tr($t, 'blog.lead')) ?></p>
    </div>
</section>

<section class="section">
    <div class="container blog-grid">
        <?php foreach ($articles as $article): ?>
            <?php
            $articleSlug = $article['slugs'][$lang] ?? $article['slugs']['lt'];
            $articleTitle = $article['title'][$lang] ?? $article['title']['lt'];
            $articleExcerpt = $article['excerpt'][$lang] ?? $article['excerpt']['lt'];
            ?>
            <article class="card blog-card">
                <span class="eyebrow">Veterinarijos patarimai</span>
                <h2><a href="<?= e($blogBase . $articleSlug . '/') ?>"><?= e($articleTitle) ?></a></h2>
                <p class="blog-date"><?= e($article['date']) ?></p>
                <p><?= e($articleExcerpt) ?></p>
                <a class="text-link" href="<?= e($blogBase . $articleSlug . '/') ?>"><?= e(tr($t, 'blog.read_more')) ?> →</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
