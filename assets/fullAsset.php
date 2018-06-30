<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class RlfAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'css/bootstrapflatly.css',
        'css/bootstrapflatlynew.css',
        'css/style.css',
        'css/style2.css',
        'css/swiper.css'

    ];
    public $js = [
        'js/jquery.js',
        'js/swiper.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'js/bootstrap-tab.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
