<nav class="site-nav" aria-label="Main navigation">
    <a href="<?= e(url_for('home', $lang)) ?>"><?= e(tr($t, 'nav.home')) ?></a>
    <a href="<?= e(url_for('about', $lang)) ?>"><?= e(tr($t, 'nav.about')) ?></a>
    <a href="<?= e(url_for('services', $lang)) ?>"><?= e(tr($t, 'nav.services')) ?></a>
    <a href="<?= e(url_for('blog', $lang)) ?>"><?= e(tr($t, 'nav.blog')) ?></a>
    <a href="<?= e(url_for('contacts', $lang)) ?>"><?= e(tr($t, 'nav.contacts')) ?></a>
    <span class="lang-switcher">
        <?php foreach ($config['languages'] as $code): ?>
            <a class="<?= $code === $lang ? 'active' : '' ?>" href="<?= e(url_for($page, $code)) ?>"><?= strtoupper(e($code)) ?></a>
        <?php endforeach; ?>
    </span>
</nav>
