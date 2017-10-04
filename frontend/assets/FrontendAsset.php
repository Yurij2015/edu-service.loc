<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;
use common\assets\Html5shiv;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $basePath = '@webroot';
    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
        'css/style.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/app.js',
    ];

    /**
     * @var array
     */
//    public $depends = [
//        YiiAsset::class,
//        BootstrapAsset::class,
//        Html5shiv::class,
//    ];

// material des from - https://github.com/romdim/yii2-bootstrap-material

//	public $depends = [
//		'yii\web\YiiAsset',
//		'romdim\bootstrap\material\BootMaterialCssAsset',
//		'romdim\bootstrap\material\BootMaterialJsAsset'
//	];
// Подключение темы. vendor->exocet. Добавлено из https://github.com/xchwarze/yii2-bootstrap-material-design
	public $depends = [
		'exocet\BootstrapMD\MaterialAsset', // include css and js
		'exocet\BootstrapMD\MaterialIconsAsset', // include icons (optional)
		'exocet\BootstrapMD\MaterialInitAsset', // add $.material.init(); js (optional)
		// more dependencies
	];


}
