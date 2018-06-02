<?php

/* @var $this yii\web\View */
/* @var $result boolean */

$this->title = 'Обучение';

?>
<div class="site-index">

    <h1><?= $this->title; ?></h1>

    <div class="body-content">
        <?php if ($result): ?>
        <div>
            Пора протестировать выборку

            <a class="btn btn-success btn-lg" href="/study/autotest" role="button">
                Автотестирование
            </a>

            <a class="btn btn-success btn-lg" href="/study/testing" role="button">
                По кандидатное тестирование
            </a>
        </div>
        <?php else: ?>
        <div>
            К сожалению, обучение не произошло
        </div>
        <?php endif; ?>

    </div>
</div>
