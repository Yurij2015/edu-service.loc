<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => env('LINK_ASSETS'),
            'appendTimestamp' => YII_ENV_DEV
        ]
    ],
    'as locale' => [
        'class' => 'common\behaviors\LocaleBehavior',
        'enablePreferredLanguage' => true
    ]
];

if (YII_DEBUG) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.33.1', '172.17.42.1', '172.17.0.1', '192.168.99.1'],
    ];
}

if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.33.1', '172.17.42.1', '172.17.0.1', '192.168.99.1'],
    ];
}

// поддержка темы для Gii. Добавлено из https://github.com/xchwarze/yii2-bootstrap-material-design
$config['modules']['gii'] = [
	'class' => 'yii\gii\Module',
	'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],
	'generators' => [
		'crud' => [
			'class' => 'yii\gii\generators\crud\Generator',
			'templates' => [ // setting templates
				'material-desing' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design/crud',
				'material-desing-h' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h/crud',
				'material-design-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-with-icons/crud',
				'material-design-h-with-icons' => '@vendor/exocet/yii2-bootstrap-material-design/generators/material-design-h-with-icons/crud'
			]
		]
	],
];

return $config;
