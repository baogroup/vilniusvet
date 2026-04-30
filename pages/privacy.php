<section class="page-hero">
    <div class="container narrow">
        <h1><?= e(tr($t, 'footer.privacy')) ?></h1>
        <p class="lead">Informacija apie asmens duomenų tvarkymą šioje svetainėje.</p>
    </div>
</section>

<section class="section">
    <div class="container content-page">
        <p>Ši privatumo politika paaiškina, kokie asmens duomenys gali būti tvarkomi naudojantis svetaine ir susisiekiant su <?= e($config['company_name']) ?>.</p>
        <h2>Duomenų valdytojas</h2>
        <p><?= e($config['company_name']) ?>, įm. k. <?= e($config['company_code']) ?>, <?= e($config['address']) ?>.</p>
        <h2>Kokius duomenis galime gauti</h2>
        <p>Jeigu susisiekiate telefonu arba el. paštu, galime gauti jūsų vardą, kontaktinius duomenis, informaciją apie gyvūną ir kitą informaciją, kurią pateikiate savanoriškai.</p>
        <h2>Duomenų naudojimo tikslai</h2>
        <p>Duomenys naudojami atsakyti į užklausas, registruoti vizitus, suteikti veterinarines paslaugas ir vykdyti teisines pareigas.</p>
        <h2>Kontaktai</h2>
        <p>Privatumo klausimais galite kreiptis el. paštu: <a href="mailto:<?= e($config['email']) ?>"><?= e($config['email']) ?></a>.</p>
    </div>
</section>
