<section class="page-hero">
    <div class="container narrow">
        <h1><?= e(tr($t, 'nav.services')) ?></h1>
        <p class="lead"><?= e(tr($t, 'services.lead')) ?></p>
    </div>
</section>

<section class="section">
    <div class="container price-list">
        <?php foreach ($services as $category): ?>
            <section class="price-category">
                <h2><?= e($category['category']) ?></h2>
                <div class="price-table">
                    <?php foreach ($category['items'] as $item): ?>
                        <div class="price-row">
                            <span><?= e($item['title']) ?></span>
                            <strong><?= e($item['price']) ?> €</strong>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</section>
