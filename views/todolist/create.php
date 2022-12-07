<?php

use yii\helpers\Url;

?>
<h1>New TO DO</h1>


<form name="form" method="post" action="<?= Url::to(['todolist/create']); ?>">

    <input type="hidden" name="<?= \yii::$app->request->csrfParam; ?>" value="<?= \yii::$app->request->csrfToken; ?>">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>