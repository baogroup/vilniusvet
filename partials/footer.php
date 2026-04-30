</main>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <strong><?= e($config['company_name']) ?></strong>
            <p>Įm.k. <?= e($config['company_code']) ?><br>PVM <?= e($config['vat_code']) ?></p>
        </div>
        <div>
            <strong><?= e(tr($t, 'section.contacts')) ?></strong>
            <p><?= e($config['address']) ?><br><a href="tel:<?= e($config['phone_href']) ?>"><?= e($config['phone']) ?></a><br><a href="mailto:<?= e($config['email']) ?>"><?= e($config['email']) ?></a></p>
        </div>
        <div>
            <strong>Informacija</strong>
            <p><a href="<?= e(url_for('privacy', $lang)) ?>"><?= e(tr($t, 'footer.privacy')) ?></a><br><a href="<?= e(url_for('cookies', $lang)) ?>"><?= e(tr($t, 'footer.cookies')) ?></a></p>
            <p class="footer-credit"><?= e(tr($t, 'footer.support')) ?> — <a href="https://baogroup.eu/" target="_blank" rel="noopener">BaoGroup.eu</a></p>
        </div>
    </div>
</footer>
<?php require __DIR__ . '/cookie-banner.php'; ?>
<script src="/assets/js/app.js"></script>
</body>
</html>
