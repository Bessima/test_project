<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'educationLevel') ?>

    <?= $form->field($model, 'educationSpecialty') ?>

    <?php // echo $form->field($model, 'educationEdditional') ?>

    <?php // echo $form->field($model, 'experienceProjectWork') ?>

    <?php // echo $form->field($model, 'experienceManager') ?>

    <?php // echo $form->field($model, 'housingCondition') ?>

    <?php // echo $form->field($model, 'iq') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
