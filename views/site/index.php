<?php

/* @var $this yii\web\View */

$this->title = 'Рекрутинг';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?=$this->title; ?></h1>

        <p class="lead">
            Принятия решения о найме сотрудников.<br/>
            Выберите дальнейшее действие:
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <a
                    class="btn btn-info btn-lg center-block"
                    role="button"
                    href="/candidate">
                    Список менеджеров
                </a>
            </div>
            <div class="col-lg-4">
                <a
                    class="btn btn-info btn-lg center-block"
                    role="button"
                    href="/study/learning">
                    Обучение
                </a>
            </div>
            <div class="col-lg-4">
                <a
                    class="btn btn-info btn-lg center-block"
                    role="button"
                    href="/study/testing">
                    Тестирование
                </a>
            </div>
        </div>

    </div>
</div>
