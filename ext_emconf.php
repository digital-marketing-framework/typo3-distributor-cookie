<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - Cookie',
    'description' => 'Cookie outbound route for Anyrel Distributor',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '2.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.99.99',
            'dmf_distributor_core' => '4.0.0-4.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];