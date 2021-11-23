<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300',
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/animate.css',
        'css/templatemo_misc.css',
        'css/templatemo_style.css',
    ];
    public $js = [
        'js/vendor/modernizr-2.6.1-respond-1.1.0.min.js',
        'js/vendor/jquery-1.11.0.min.js',
        'js/vendor/jquery-1.11.0.min.js',
        'js/bootstrap.js',
        'js/plugins.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
