<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\helpers\Url;

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
        'css/site.css',
        'themes/joli/css/theme-default.css',
    ];
    public $js = [
        'themes/joli/js/plugins/jquery/jquery.min.js',
        'themes/joli/js/plugins/jquery/jquery-ui.min.js',
        'themes/joli/js/plugins/bootstrap/bootstrap.min.js',      

        'themes/joli/js/plugins/icheck/icheck.min.js',        
        'themes/joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js',
        'themes/joli/js/plugins/scrolltotop/scrolltopcontrol.js',

        'themes/joli/js/plugins/morris/raphael-min.js',
        'themes/joli/js/plugins/morris/morris.min.js',       
        'themes/joli/js/plugins/rickshaw/d3.v3.js',
        'themes/joli/js/plugins/rickshaw/rickshaw.min.js',
        'themes/joli/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'themes/joli/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',               
        'themes/joli/js/plugins/bootstrap/bootstrap-datepicker.js',                
        'themes/joli/js/plugins/owl/owl.carousel.min.js',                 

        'themes/joli/js/plugins/moment.min.js',
        'themes/joli/js/plugins/daterangepicker/daterangepicker.js',
        'themes/joli/js/settings.js',
        'themes/joli/js/plugins.js',        
        'themes/joli/js/actions.js',
        'themes/joli/js/demo_dashboard.js',
];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
