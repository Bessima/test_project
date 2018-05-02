<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Рекрутинг</h1>

        <p class="lead">Данный сервис предназначен для принятия решения о найме сотрудников</p>
        <p class="lead">Выберите дальнейшее действие: </p>
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
                    href="/study">
                    Обучение
                </a>
            </div>
            <div class="col-lg-4">
                <a
                    class="btn btn-info btn-lg center-block"
                    role="button"
                    href="/testing">
                    Тестирование
                </a>
            </div>
        </div>

    </div>
</div>
