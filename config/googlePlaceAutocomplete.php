<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/3/19
 * Time: 11:12 AM
 */

return [
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/widgets/views' => [
                        '@codexten/yii/google/place/autocomplete/widgets/views',
                    ],
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dosamigos\google\maps\MapAsset' => [
                    'options' => [
                        'key' => $params['google.apiKey'],
                        'language' => 'id',
                        'version' => '3.1.18',
                    ],
                ],
            ],
        ],
    ],
    'params' => [
        'googleMapsLibraries' => 'places',
    ],
];