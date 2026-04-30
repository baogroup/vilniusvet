<section class="page-hero">
    <div class="container narrow">
        <h1><?= e(tr($t, 'nav.blog')) ?></h1>
        <p class="lead"><?= e(tr($t, 'blog.lead')) ?></p>
    </div>
</section>

<section class="section">
    <div class="container blog-grid">
        <?php foreach ($posts as $post): ?>
            <article class="card blog-card">
                <span class="eyebrow">Veterinarijos patarimai</span>
                <h2><?= e($post['title'][$lang] ?? $post['title']['lt']) ?></h2>
                <p><?= e($post['excerpt'][$lang] ?? $post['excerpt']['lt']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
