<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/mystyle.css',
        'css/font-awesome.min.css',
        'css/icomoon-social.css',
    ];
    public $js = [
        'js/jquery-3.1.1.js',
        'js/jquery.easing.min.js',
        'js/main.js',
        'js/modernizr-2.6.2-respond-1.1.0.min.js',
        'js/scrolling-nav.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
