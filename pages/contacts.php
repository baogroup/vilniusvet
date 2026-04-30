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

<section class="section muted">
    <div class="container form-wrap">
        <div class="section-head">
            <h2>Registracijos užklausa</h2>
            <p>Užpildykite formą ir klinika susisieks dėl vizito laiko. Skubiais atvejais rekomenduojame skambinti telefonu.</p>
        </div>

        <?php if (!empty($_GET['status'])): ?>
            <div class="form-alert <?= e($_GET['status']) === 'ok' ? 'success' : 'error' ?>">
                <?php if ($_GET['status'] === 'ok'): ?>
                    Žinutė išsiųsta. Susisieksime su jumis kuo greičiau.
                <?php elseif ($_GET['status'] === 'missing'): ?>
                    Užpildykite privalomus laukus ir patvirtinkite sutikimą dėl duomenų tvarkymo.
                <?php elseif ($_GET['status'] === 'email'): ?>
                    Patikrinkite el. pašto adresą.
                <?php else: ?>
                    Žinutės išsiųsti nepavyko. Prašome paskambinti telefonu.
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
                    Vardas *
                    <input type="text" name="name" required autocomplete="name">
                </label>
                <label>
                    Telefonas *
                    <input type="tel" name="phone" required autocomplete="tel">
                </label>
                <label>
                    El. paštas
                    <input type="email" name="email" autocomplete="email">
                </label>
                <label>
                    Gyvūnas
                    <input type="text" name="pet" placeholder="Pvz., šuo, katė, triušis">
                </label>
            </div>
            <label>
                Žinutė *
                <textarea name="message" rows="6" required placeholder="Trumpai aprašykite situaciją arba pageidaujamą vizito laiką"></textarea>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" name="consent" required>
                Sutinku, kad mano pateikti duomenys būtų naudojami atsakymui į užklausą ir vizito registracijai. <a href="<?= e(url_for('privacy', $lang)) ?>">Privatumo politika</a>
            </label>
            <button class="button primary" type="submit">Siųsti užklausą</button>
        </form>
    </div>
</section>

<section class="map-section">
    <iframe title="Vilniaus veterinarijos gydykla žemėlapyje" src="https://www.google.com/maps?q=Siesik%C5%B3%20g.%2015%2C%20Vilnius%2C%2007170&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
