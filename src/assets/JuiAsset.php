<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace algsupport\jui\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JuiAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = __DIR__ . '/dist';
    /**
     * {@inheritdoc}
     */
    public $js = [
        'jquery-ui.min.js',
    ];
    /**
     * {@inheritdoc}
     */
    public $css = [
        'themes/smoothness/jquery-ui.css',
    ];
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
