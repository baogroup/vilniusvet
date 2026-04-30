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
            <p><strong><?= e(tr($t, 'contacts.address')) ?>:</strong><br><?= e($config['address']) ?></p>
            <p><strong><?= e(tr($t, 'contacts.phone')) ?>:</strong><br><a href="tel:<?= e($config['phone_href']) ?>"><?= e($config['phone']) ?></a></p>
            <p><strong><?= e(tr($t, 'contacts.email')) ?>:</strong><br><a href="mailto:<?= e($config['email']) ?>"><?= e($config['email']) ?></a></p>
            <p><strong><?= e(tr($t, 'contacts.languages')) ?>:</strong><br><?= e($config['communication_languages'][$lang]) ?></p>
        </div>
        <div class="contact-card">
            <h2><?= e(tr($t, 'contacts.hours')) ?></h2>
            <?php foreach ($config['working_hours'][$lang] as $day => $hours): ?>
                <p class="hours-line"><span><?= e($day) ?></span><strong><?= e($hours) ?></strong></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="container form-wrap">
        <div class="section-head">
            <h2><?= e(tr($t, 'form.title')) ?></h2>
            <p><?= e(tr($t, 'form.lead')) ?></p>
        </div>

        <?php if (!empty($_GET['status'])): ?>
            <div class="form-alert <?= e($_GET['status']) === 'ok' ? 'success' : 'error' ?>">
                <?php if ($_GET['status'] === 'ok'): ?>
                    <?= e(tr($t, 'form.alert.ok')) ?>
                <?php elseif ($_GET['status'] === 'missing'): ?>
                    <?= e(tr($t, 'form.alert.missing')) ?>
                <?php elseif ($_GET['status'] === 'email'): ?>
                    <?= e(tr($t, 'form.alert.email')) ?>
                <?php else: ?>
                    <?= e(tr($t, 'form.alert.error')) ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <form class="contact-form" action="/send.php" method="post">
            <input type="hidden" name="lang" value="<?= e($lang) ?>">
            <div class="hp-field" aria-hidden="true">
                <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            </div>
            <div class="form-grid">
                <label>
                    <?= e(tr($t, 'form.name')) ?> *
                    <input type="text" name="name" required autocomplete="name">
                </label>
                <label>
                    <?= e(tr($t, 'form.phone')) ?> *
                    <input type="tel" name="phone" required autocomplete="tel">
                </label>
                <label>
                    <?= e(tr($t, 'form.email')) ?>
                    <input type="email" name="email" autocomplete="email">
                </label>
                <label>
                    <?= e(tr($t, 'form.pet')) ?>
                    <input type="text" name="pet" placeholder="<?= e(tr($t, 'form.pet.placeholder')) ?>">
                </label>
            </div>
            <label>
                <?= e(tr($t, 'form.message')) ?> *
                <textarea name="message" rows="6" required placeholder="<?= e(tr($t, 'form.message.placeholder')) ?>"></textarea>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" name="consent" required>
                <?= e(tr($t, 'form.consent')) ?> <a href="<?= e(url_for('privacy', $lang)) ?>"><?= e(tr($t, 'footer.privacy')) ?></a>
            </label>
            <button class="button primary" type="submit"><?= e(tr($t, 'form.submit')) ?></button>
        </form>
    </div>
</section>

<section class="map-section">
    <iframe title="<?= e(tr($t, 'map.title')) ?>" src="https://www.google.com/maps?q=Siesik%C5%B3%20g.%2015%2C%20Vilnius%2C%2007170&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
