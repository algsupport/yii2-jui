<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace algsupport\jui;

use yii\helpers\Html;

/**
 * AutoComplete renders an autocomplete jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * echo AutoComplete::widget([
 *     'model' => $model,
 *     'attribute' => 'country',
 *     'clientOptions' => [
 *         'source' => ['USA', 'RUS'],
 *     ],
 * ]);
 * ```
 *
 * The following example will use the name property instead:
 *
 * ```php
 * echo AutoComplete::widget([
 *     'name' => 'country',
 *     'clientOptions' => [
 *         'source' => ['USA', 'RUS'],
 *     ],
 * ]);
 * ```
 *
 * You can also use this widget in an [[yii\widgets\ActiveForm|ActiveForm]] using the [[yii\widgets\ActiveField::widget()|widget()]]
 * method, for example like this:
 *
 * ```php
 * <?= $form->field($model, 'from_date')->widget(\yii\jui\AutoComplete::classname(), [
 *     'clientOptions' => [
 *         'source' => ['USA', 'RUS'],
 *     ],
 * ]) ?>
 * ```
 *
 * @see https://api.jqueryui.com/autocomplete/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class AutoComplete extends InputWidget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->registerWidget('autocomplete');
        return $this->renderWidget();
    }

    /**
     * Renders the AutoComplete widget.
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
