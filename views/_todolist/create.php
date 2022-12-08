<?php

use yii\helpers\Url;

?>
<h1>Novo Cliente</h1>


<form name="form" method="post" action="<?= Url::to(['todolist/create']); ?>">

    <input type="hidden" name="<?= \yii::$app->request->csrfParam; ?>" value="<?= \yii::$app->request->csrfToken; ?>">

    <div class="form-group">
        <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="inform the name">        
    </div>

    <div class="form-group">
        <label for="due_date">Data:</label>
        <input type="date" class="form-control" id="due_date" name="due_date" value="2022-12-12" placeholder="Inform the date">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>