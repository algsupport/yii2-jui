<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace algsupport\jui;

use yii\helpers\Html;

/**
 * Draggable renders an draggable jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * Draggable::begin([
 *     'clientOptions' => ['grid' => [50, 20]],
 * ]);
 *
 * echo 'Draggable contents here...';
 *
 * Draggable::end();
 * ```
 *
 * @see https://api.jqueryui.com/draggable/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class Draggable extends Widget
{
    /**
     * {@inheritdoc}
     */
    protected $clientEventMap = [
        'create' => 'dragcreate',
        'drag' => 'drag',
        'stop' => 'dragstop',
        'start' => 'dragstart',
    ];


    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        echo Html::beginTag('div', $this->options) . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div') . "\n";
        $this->registerWidget('draggable');
    }
}
