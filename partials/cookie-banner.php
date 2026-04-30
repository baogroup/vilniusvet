<section class="cookie-banner" id="cookieBanner" aria-label="Cookie notice" hidden>
    <div>
        <p><?= e(tr($t, 'cookie.text')) ?></p>
    </div>
    <div class="cookie-actions">
        <button type="button" data-cookie-choice="all"><?= e(tr($t, 'cookie.accept')) ?></button>
        <button type="button" data-cookie-choice="necessary"><?= e(tr($t, 'cookie.reject')) ?></button>
        <a href="<?= e(url_for('cookies', $lang)) ?>"><?= e(tr($t, 'cookie.settings')) ?></a>
    </div>
</section>
