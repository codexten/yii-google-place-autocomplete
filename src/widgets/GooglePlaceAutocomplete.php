<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/3/19
 * Time: 10:57 AM
 */

namespace codexten\yii\google\place\autocomplete\widgets;


use codexten\yii\google\place\autocomplete\GooglePlaceAutocompleteAsset;
use codexten\yii\web\Widget;

class GooglePlaceAutocomplete extends Widget
{

    public function render($view, $params = [])
    {
        \Yii::$app->view->registerAssetBundle(GooglePlaceAutocompleteAsset::class);

        return parent::render($view, $params);
    }
}