<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/3/19
 * Time: 11:16 AM
 */

namespace codexten\yii\google\place\autocomplete;


use dosamigos\google\maps\MapAsset;
use yii\web\AssetBundle;

class GooglePlaceAutocompleteAsset extends AssetBundle
{
    public $sourcePath = '@codexten/yii/google/place/autocomplete/assets';
    public $js = [
        'js/script.js',
    ];
    public $depends = [
        MapAsset::class,
    ];
}