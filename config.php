<?php

return [
    'site_name' => 'Vilniaus veterinarijos gydykla',
    'company_name' => 'UAB Vilniaus veterinarijos gydykla',
    'company_code' => '122360240',
    'vat_code' => 'LT223602418',
    'address' => 'Siesikų g. 15, Vilnius, 07170',
    'phone' => '(8-5) 248 2966',
    'phone_href' => '+37052482966',
    'email' => 'info@vilnius.vet',
    'form_recipient' => 'info@vilnius.vet',
    'form_sender' => 'no-reply@vilnius.vet',
    'languages' => ['lt', 'en', 'ru'],
    'default_lang' => 'lt',
    'working_hours' => [
        'lt' => [
            'Pir.-Pen.' => '9.00 - 19.00',
            'Šeš.' => '9.00 - 15.00',
            'Sek.' => 'ilsimės',
        ],
        'en' => [
            'Mon-Fri' => '9.00 - 19.00',
            'Sat' => '9.00 - 15.00',
            'Sun' => 'closed',
        ],
        'ru' => [
            'Пн.-Пт.' => '9.00 - 19.00',
            'Сб.' => '9.00 - 15.00',
            'Вс.' => 'выходной',
        ],
    ],
    'doctors' => [
        [
            'name' => 'Bronislovas Musteikis',
            'role' => [
                'lt' => 'veterinarijos gydytojas',
                'en' => 'veterinary doctor',
                'ru' => 'ветеринарный врач',
            ],
        ],
        [
            'name' => 'Irina Leonova',
            'role' => [
                'lt' => 'veterinarijos gydytoja',
                'en' => 'veterinary doctor',
                'ru' => 'ветеринарный врач',
            ],
        ],
    ],
    'communication_languages' => [
        'lt' => 'Lietuvių, rusų ir lenkų kalbomis',
        'en' => 'Lithuanian, Russian and Polish',
        'ru' => 'на литовском, русском и польском языках',
    ],
];
