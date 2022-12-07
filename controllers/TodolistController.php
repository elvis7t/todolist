<?php

namespace app\controllers;

use app\models\Todolist;
use yii\web\NotAcceptableHttpException;

/**
 * ClientsController implements the CRUD actions for Clients model.
 */
class TodolistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $todolist = Todolist::find()->all();        
        return $this->render('index', [
            'todolist' => $todolist
        ]);
    }
    
    /**
     * Creates a new Clients model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = \yii::$app->request;

        if ($request->isPost) {
            $model = new Todolist();
            //attributes is a property of active record when passing $request->post() without parameter example $request->post('email') or anything it will get all post data
            $model->attributes =  $request->post();
            //only writes if the rules method exists in the model
            $model->save();
            return $this->redirect(['todolist/index']);
        }

        return $this->render('create');
    }
}
