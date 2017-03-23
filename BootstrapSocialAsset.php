<?php
/**
 * BootstrapSocialAsset.php
 * @author Denis Ostrovsky
 * @link https://github.com/denostr
 */

namespace denostr\BootstrapSocial;

/**
 * Class BootstrapSocialAsset
 * @package denostr\BootstrapSocial
 */
class BootstrapSocialAsset extends \yii\web\AssetBundle
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
