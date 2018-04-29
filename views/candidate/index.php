<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CandidateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Кандидаты на должность "Менеджер"';
$this->params['breadcrumbs'][] = "Менеджеры";
?>
<div class="candidate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',
            'educationLevel',
            'educationSpecialty',
            //'educationEdditional',
            //'experienceProjectWork',
            //'experienceManager',
            //'housingCondition',
            //'iq',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
