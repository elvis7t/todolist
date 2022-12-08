<?php

use yii\helpers\Html;

$this->title = 'Create To Do';
$this->params['breadcrumbs'][] = ['label' => 'Todolist', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todolist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
