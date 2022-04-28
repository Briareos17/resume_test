<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\Models\Resume */
/* @var $form yii\widgets\ActiveForm */
/* @var $frameworks \app\models\Framework[] */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')
        ->widget(DatePicker::class, [
            'options' => [
                'placeholder' => 'Enter birth date ...'
            ],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
        ]); ?>

    <?= $form->field($model, 'experience_years')->textInput() ?>

    <?= $form->field($model, 'resume_path')->fileInput() ?>

    <?= $form->field($model, 'frameworks')->checkboxList($frameworks) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
