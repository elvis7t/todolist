<?php
    use yii\helpers\Url;
    /* @var $this yii\web\View */
    ?>
    <h1 class="text text-center">Clientes</h1>
    <a href="<?= Url::to(['todolist/create']);?>" class="btn btn-success">New To Do</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>            
            <th>-</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($todolist as $todo): ?>
                <tr>
                    <td><?= $todo->id; ?></td>
                    <td><?= $todo->name; ?></td>                    
                    <td>
                       - 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>