<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="hot-question-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'text', [
        'template' => '<div class="input-group"><span class="input-group-addon">Enter Question Text</span>{input}</div>',
    ]); ?>
    <h3 align="center">Answer variants</h3>
    <?= $form->field($model, 'answer_1', [
        'template' => '<div class="input-group"><span class="input-group-addon">'.
            Html::activeRadio($model, 'correct', ['value' => 1]).'</span>{input}</div>',
    ]); ?>
    <?= $form->field($model, 'answer_2', [
        'template' => '<div class="input-group"><span class="input-group-addon">'.
            Html::activeRadio($model, 'correct', ['value' => 2]).'</span>{input}</div>',
    ]); ?>
    <?= $form->field($model, 'answer_3', [
        'template' => '<div class="input-group"><span class="input-group-addon">'.
            Html::activeRadio($model, 'correct', ['value' => 3]).'</span>{input}</div>',
    ]); ?>
    <?= $form->field($model, 'answer_4', [
        'template' => '<div class="input-group"><span class="input-group-addon">'.
            Html::activeRadio($model, 'correct', ['value' => 4]).'</span>{input}</div>',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
