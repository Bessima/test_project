<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'educationLevel')->textInput() ?>

    <?= $form->field($model, 'educationSpecialty')->textInput() ?>

    <?= $form->field($model, 'educationEdditional')->textInput() ?>

    <?= $form->field($model, 'experienceProjectWork')->textInput() ?>

    <?= $form->field($model, 'experienceManager')->textInput() ?>

    <?= $form->field($model, 'housingCondition')->textInput() ?>

    <?= $form->field($model, 'iq')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
