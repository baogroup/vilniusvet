<?php

$config = require __DIR__ . '/config.php';

$lang = $_POST['lang'] ?? $config['default_lang'];
if (!in_array($lang, $config['languages'], true)) {
    $lang = $config['default_lang'];
}

function clean_input(string $value): string {
    return trim(str_replace(["\r", "\0"], '', $value));
}

function contact_url_for_lang(string $lang): string {
    $slugs = [
        'lt' => 'kontaktai',
        'en' => 'contacts',
        'ru' => 'kontakty',
    ];
    return '/' . rawurlencode($lang) . '/' . ($slugs[$lang] ?? 'kontaktai') . '/';
}

function redirect_back(string $lang, string $status): never {
    header('Location: ' . contact_url_for_lang($lang) . '?status=' . rawurlencode($status));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_back($lang, 'error');
}

// Honeypot field. Real users should never fill this.
if (!empty($_POST['website'] ?? '')) {
    redirect_back($lang, 'ok');
}

$name = clean_input($_POST['name'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$pet = clean_input($_POST['pet'] ?? '');
$message = clean_input($_POST['message'] ?? '');
$consent = isset($_POST['consent']);

if ($name === '' || $phone === '' || $message === '' || !$consent) {
    redirect_back($lang, 'missing');
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_back($lang, 'email');
}

$subject = 'Nauja užklausa iš vilnius.vet svetainės';
$bodyLines = [
    'Nauja užklausa iš vilnius.vet svetainės',
    '',
    'Vardas: ' . $name,
    'Telefonas: ' . $phone,
    'El. paštas: ' . ($email !== '' ? $email : '-'),
    'Gyvūnas: ' . ($pet !== '' ? $pet : '-'),
    '',
    'Žinutė:',
    $message,
    '',
    'Kalba: ' . strtoupper($lang),
    'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? '-'),
    'Laikas: ' . date('Y-m-d H:i:s'),
];

$body = implode("\n", $bodyLines);

$headers = [];
$headers[] = 'From: ' . $config['site_name'] . ' <' . $config['form_sender'] . '>';
if ($email !== '') {
    $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
}
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = mail($config['form_recipient'], '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

redirect_back($lang, $sent ? 'ok' : 'error');
