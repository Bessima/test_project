<?php

use app\models\Candidate;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model Candidate */
/* @var $edducationLevel array */
/* @var $edducationEdditional array */
/* @var $edducationSpecialty  array */
/* @var $edducationHousing  array */
/* @var $edducationManager  array */
/* @var $edducationProject  array */

$this->title = 'Обучение';

?>
<div class="site-index">

    <h1><?= $this->title; ?></h1>

    <div class="body-content">
        <h2>Введите входные параметры для тестирования системы</h2>
        <?php $form = ActiveForm::begin([
                'action' => 'result-testing'
        ]); ?>

        <?= $form->field($model, 'age'); ?>

        <?= $form
            ->field($model, 'educationLevel')
            ->dropDownList($edducationLevel); ?>

        <?= $form
            ->field($model, 'educationSpecialty')
            ->dropDownList($edducationSpecialty); ?>

        <?= $form
            ->field($model, 'educationEdditional')
            ->dropDownList($edducationEdditional); ?>

        <?= $form
            ->field($model, 'experienceProjectWork')
            ->dropDownList($edducationProject); ?>

        <?= $form
            ->field($model, 'experienceManager')
            ->dropDownList($edducationManager); ?>

        <?= $form
            ->field($model, 'housingCondition')
            ->dropDownList($edducationHousing); ?>
        </div>

        <?= $form->field($model, 'iq')->hint("IQ, общий балл"); ?>

        <div class="form-group">
            <?= Html::submitButton('Проверить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
