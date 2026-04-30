<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow"><?= e(tr($t, 'hero.badge')) ?></span>
            <h1><?= e(tr($t, 'hero.title')) ?></h1>
            <p class="lead"><?= e(tr($t, 'hero.text')) ?></p>
            <div class="hero-actions">
                <a class="button primary" href="tel:<?= e($config['phone_href']) ?>"><?= e(tr($t, 'cta.call')) ?></a>
                <a class="button secondary" href="<?= e(url_for('services', $lang)) ?>"><?= e(tr($t, 'cta.services')) ?></a>
            </div>
            <div class="quick-contact">
                <span><?= e($config['address']) ?></span>
                <span><?= e($config['phone']) ?></span>
            </div>
        </div>
        <div class="hero-card">
            <strong><?= e(tr($t, 'section.contacts')) ?></strong>
            <?php foreach ($config['working_hours'][$lang] as $day => $hours): ?>
                <p><span><?= e($day) ?></span><b><?= e($hours) ?></b></p>
            <?php endforeach; ?>
            <small><?= e($config['communication_languages'][$lang]) ?></small>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2><?= e(tr($t, 'section.services')) ?></h2>
            <p><?= e(tr($t, 'services.lead')) ?></p>
        </div>
        <div class="service-cards">
            <?php foreach (array_slice($services, 0, 6) as $category): ?>
                <article class="card">
                    <h3><?= e($category['category'][$lang] ?? $category['category']['lt']) ?></h3>
                    <p><?= e($category['items'][0]['title'][$lang] ?? $category['items'][0]['title']['lt']) ?> — <?= e($category['items'][0]['price']) ?> €</p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="container split">
        <div>
            <h2><?= e(tr($t, 'section.about')) ?></h2>
            <p><?= e(tr($t, 'about.short')) ?></p>
            <a class="text-link" href="<?= e(url_for('about', $lang)) ?>"><?= e(tr($t, 'cta.about')) ?> →</a>
        </div>
        <div class="facts-grid">
            <div><strong>1993</strong><span><?= e(tr($t, 'why.experience.title')) ?></span></div>
            <div><strong>30+</strong><span><?= e(tr($t, 'why.experience.text')) ?></span></div>
            <div><strong>2</strong><span><?= e(tr($t, 'section.doctors')) ?></span></div>
            <div><strong>LT / RU / PL</strong><span><?= e(tr($t, 'contacts.languages')) ?></span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2><?= e(tr($t, 'section.doctors')) ?></h2>
        </div>
        <div class="doctor-grid">
            <?php foreach ($config['doctors'] as $doctor): ?>
                <article class="doctor-card">
                    <div class="doctor-photo-placeholder"></div>
                    <h3><?= e($doctor['name']) ?></h3>
                    <p><?= e($doctor['role'][$lang]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section contact-strip">
    <div class="container contact-strip-inner">
        <div>
            <h2><?= e(tr($t, 'section.contacts')) ?></h2>
            <p><?= e($config['address']) ?></p>
        </div>
        <a class="button primary" href="tel:<?= e($config['phone_href']) ?>"><?= e($config['phone']) ?></a>
    </div>
</section>
