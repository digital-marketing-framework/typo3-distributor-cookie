<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - Cookie',
    'description' => 'Cookie outbound route for Anyrel Distributor',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_distributor_core' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];