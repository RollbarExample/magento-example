<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '379158f4a7ffda2f5f400a9b2aaac67d'
    ],
    'db' => [
        'table_prefix' => 'rb',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => '',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'translate' => 0,
        'config_webservice' => 0
    ],
    'install' => [
        'date' => 'Mon, 06 Aug 2018 11:03:56 +0000'
    ],
    'rollbar' => [
        'access_token' => 'f5aba0d9feed4fad920bfe250b21930b',
        'environment' => 'development'
    ]
];
