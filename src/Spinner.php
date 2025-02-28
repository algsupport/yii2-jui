<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace algsupport\jui;

use yii\helpers\Html;

/**
 * Spinner renders an spinner jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * echo Spinner::widget([
 *     'model' => $model,
 *     'attribute' => 'country',
 *     'clientOptions' => ['step' => 2],
 * ]);
 * ```
 *
 * The following example will use the name property instead:
 *
 * ```php
 * echo Spinner::widget([
 *     'name'  => 'country',
 *     'clientOptions' => ['step' => 2],
 * ]);
 * ```
 *
 * You can also use this widget in an [[yii\widgets\ActiveForm|ActiveForm]] using the [[yii\widgets\ActiveField::widget()|widget()]]
 * method, for example like this:
 *
 * ```php
 * <?= $form->field($model, 'from_date')->widget(\yii\jui\Spinner::classname(), [
 *     'clientOptions' => ['step' => 2],
 * ]) ?>
 * ```
 *
 * @see https://api.jqueryui.com/spinner/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class Spinner extends InputWidget
{
    /**
     * @inheritDoc
     */
    protected $clientEventMap = [
        'spin' => 'spin',
        'change' => 'spinchange',
        'create' => 'spincreate',
        'start' => 'spinstart',
        'stop' => 'spinstop'
    ];


    /**
     * Renders the widget.
     */
    public function run()
    {
        echo $this->renderWidget();
        $this->registerWidget('spinner');
    }

    /**
     * Renders the Spinner widget.
     * @return string the rendering result.
     */
    public function renderWidget()
    {
        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
        }
        return Html::textInput($this->name, $this->value, $this->options);
    }
}
