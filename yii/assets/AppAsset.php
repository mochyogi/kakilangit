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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'themes/mate/css/bootstrap.min.css',
        'themes/mate/css/font-awesome.min.css',
        'themes/mate/css/line-icons.css',
        'themes/mate/css/owl.carousel.css',
        'themes/mate/css/owl.theme.css',
        'themes/mate/css/nivo-lightbox.css',
        'themes/mate/css/magnific-popup.css',
        'themes/mate/css/slicknav.css',
        'themes/mate/css/animate.css',
        'themes/mate/css/main.css',
        'themes/mate/css/responsive.css',
    ];
    public $js = [
        'themes/mate/js/jquery-min.js',
        'themes/mate/js/popper.min.js',
        'themes/mate/js/bootstrap.min.js',
        'themes/mate/js/jquery.mixitup.js',
        'themes/mate/js/nivo-lightbox.js',
        'themes/mate/js/owl.carousel.js',    
        'themes/mate/js/jquery.stellar.min.js',    
        'themes/mate/js/jquery.nav.js',    
        'themes/mate/js/scrolling-nav.js',    
        'themes/mate/js/jquery.easing.min.js', 
        'themes/mate/js/smoothscroll.js',    
        'themes/mate/js/jquery.slicknav.js',     
        'themes/mate/js/wow.js',   
        'themes/mate/js/jquery.vide.js',
        'themes/mate/js/jquery.counterup.min.js',    
        'themes/mate/js/jquery.magnific-popup.min.js',    
        'themes/mate/js/waypoints.min.js',    
        'themes/mate/js/form-validator.min.js',
        'themes/mate/js/contact-form-script.js',   
        'themes/mate/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
