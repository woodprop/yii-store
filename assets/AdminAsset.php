<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminlte/plugins/fontawesome-free/css/all.min.css',
        'adminlte/dist/css/adminlte.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];
    public $js = [
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
