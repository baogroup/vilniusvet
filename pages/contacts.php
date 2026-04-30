<section class="page-hero">
    <div class="container narrow">
        <h1><?= e(tr($t, 'nav.contacts')) ?></h1>
        <p class="lead"><?= e(tr($t, 'contacts.lead')) ?></p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-card">
            <h2><?= e($config['site_name']) ?></h2>
            <p><strong>Adresas:</strong><br><?= e($config['address']) ?></p>
            <p><strong>Telefonas:</strong><br><a href="tel:<?= e($config['phone_href']) ?>"><?= e($config['phone']) ?></a></p>
            <p><strong>El. paštas:</strong><br><a href="mailto:<?= e($config['email']) ?>"><?= e($config['email']) ?></a></p>
            <p><strong>Kalbos:</strong><br><?= e($config['communication_languages'][$lang]) ?></p>
        </div>
        <div class="contact-card">
            <h2>Darbo laikas</h2>
            <?php foreach ($config['working_hours'][$lang] as $day => $hours): ?>
                <p class="hours-line"><span><?= e($day) ?></span><strong><?= e($hours) ?></strong></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>
