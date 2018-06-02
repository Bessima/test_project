<?php

/* @var $this yii\web\View */
/* @var $notLearning boolean */
/* @var $testSample string */
/* @var $rightResult string */
/* @var $testResult string */

$this->title = 'Обучение';

?>
<div class="site-index">

    <h1><?= $this->title; ?></h1>

    <div class="body-content">
        <?php if (isset($notLearning)): ?>
        <div>
            <h3>
                К сожалению, нет обученных данных, вернитесь и обучите нейросеть.
            </h3>
            <a class="btn btn-warning btn-lg" href="/study/learning" role="button">
                Обучение
            </a>
        </div>

        <?php else: ?>

            <h3>Автотестирование кандидата</h3>

            <div>Выборка входящая <?= $testSample; ?> </div>

            <?php if (isset($rightResult)): ?>
                <div>Правильный ответ <?= $rightResult; ?> </div>
            <?php endif; ?>

            <div>Полученный ответ <?= $testResult; ?> </div>

        <?php endif; ?>

    </div>
</div>
