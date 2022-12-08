<?php
    use yii\helpers\Url;
    /* @var $this yii\web\View */
?>
<h1 class="text text-center">To Do List</h1>

<a href="<?= Url::to(['todolist/create']);?>" class="btn btn-success">New To Do</a>

<table class="table">
    <thead>
    <tr>
        <th>#</th>        
        <th>Name</th>
        <th>Data</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($todolist as $todo): ?>
            <tr>
                <td><?= $todo->id; ?></td>
                <td><?= $todo->name; ?></td>                
                <td><?= $todo->due_date; ?></td>                
                <td>
                    <a href="<?= Url::to(['todolist/update', 'id' => $todo->id]);?>">Editar</a> |
                    <a href="<?= Url::to(['tudolist/delete', 'id' => $todo->id]);?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>