<?php
    /* @var $this yii\web\View */
    use yii\helpers\Url;
?>
<h1>Update To Do</h1>


<form name="form" method="post" action="<?= Url::to(['todolist/update', 'id' => $model->id]); ?>">

   <input type="hidden" name="<?= \yii::$app->request->csrfParam; ?>" 
            value="<?= \yii::$app->request->csrfToken; ?>">

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" 
                placeholder="Informe o nome" value="<?= $model->name; ?>">
    </div>
    <div class="form-group"> 
        <label for="data">Data:</label>
        <input type="date" class="form-control" id="data" name="data"
                placeholder="Informe o data" value="<?= $model->due_date; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>