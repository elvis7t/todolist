<?php

namespace app\controllers;

use app\models\Todolist;
use yii\web\NotFoundHttpException;

class TodolistController extends \yii\web\Controller
{

     /**
     * Método responsável por realizar a listagem das Tarefas
     */

    public function actionIndex()
    {
        $todolist = Todolist::find()->all();

        return $this->render('index', [
            'todolist' => $todolist
        ]);
    }


    /**
     * Método responsável por realizar a criação de uma nova tarefa.
     * OBS: Para utilizar $model->attributes, deverá estar habilitado no model dentro do metodo rules os nomes do campo com o valor safe
     */
    public function actionCreate()
    {
        $request = \yii::$app->request;

        if($request->isPost)
        {
           $model = new Todolist();

           //attributes é uma propriedade do active record ao passar $request->post() sem parametro exemplo $request->post('email') nem nada ele irá pegar todos os dados do post
           $model->attributes =  $request->post(); 
           //só grava se o metodo rules existir no modelo
           $model->save();           
           return $this->redirect(['todolist/index']);

        }

        return $this->render('create');
    }


      /**
     * Método responsável em realizar a atualização da tarefa, recebe o id como parametro (antes disso devera registrar a 
     * personalização de rota no arquivo config/web.php) dentro do array rules
     */
    public function actionUpdate($id)
    {
        $model = Todolist::findOne($id);

        if(! $model)
        {
            throw new NotFoundHttpException("Page not found");
        }

        $request = \yii::$app->request;
        
        if($request->isPost)
        {
           //attributes é uma propriedade do active record ao passar $request->post() sem parametro exemplo $request->post('due_date') nem nada ele irá pegar todos os dados do post
           $model->attributes =  $request->post(); 
           //irá identificar que o registro já existe
           $model->save();
           
           return $this->redirect(['todolist/index']);

        }

        return $this->render('update', [
            'model' => $model
        ]);
    }


     /**
     *  Método responsável por excluir um registro, recebe como parametro o id do mesmo como parametro. (antes disso devera registrar a 
     * personalização de rota no arquivo config/web.php) dentro do array rules 
     * 
     */
    public function actionDelete($id)
    {

        $model = Todolist::findOne($id);

        if(! $model)
        {
            throw new NotFoundHttpException("Page not found");
        }

        $model->delete();
        
        return $this->redirect(['todolist/index']);
    }




}
