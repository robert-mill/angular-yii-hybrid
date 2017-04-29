<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'css/site.css',
        'css/custom.css',
        'css/cart.css',

    ];
    public $js = [
        'bower_components/angular/angular.js',
        'js/angular-animate/angular-animate.min.js',
        'js/angular-route/angular-route.min.js',
        'js/app.js',
        'bower_components/ngCart/dist/ngCart.js',
        'https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.min.js',

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

