<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'To Do';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todolist-index">

    <h1><?= Html::encode($this->title) ?></h1>    

    <p>
        <?= Html::a('Create To Do', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'due_date:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
