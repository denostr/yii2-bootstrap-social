<?php

namespace app\assets;

use yii\web\AssetBundle;

class BootstrapSocialAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-social';

    public $css = [
        'bootstrap-social.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
