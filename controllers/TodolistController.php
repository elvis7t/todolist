<?php

namespace app\controllers;

use Yii;
use app\models\Todolist;
use app\models\TodolistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TodolistController implementa as ações CRUD para o modelo Todolist.
 */
class TodolistController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lista todos os models Todolist.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TodolistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Exibe um único model Todolist.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Cria um novo model Todolist.
     * Se a criação for bem-sucedida, o navegador será redirecionado para a página 'visualizar'.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Todolist();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Atualiza um modelo Todolist existente.
     * Se a atualização for bem-sucedida, o navegador será redirecionado para a página 'visualizar'.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException se o modelo não pode ser encontrado
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Exclui um model Todolist existente.
     * Se a exclusão for bem-sucedida, o navegador será redirecionado para a página 'índice'.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException se o modelo não pode ser encontrado
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Localiza o model Todolist com base em seu valor de chave primária.
     * Se o modelo não for encontrado, uma exceção HTTP 404 será lançada.
     * @param integer $id
     * @return Todolist the loaded model
     * @throws NotFoundHttpException se o modelo não pode ser encontrado
     */
    protected function findModel($id)
    {
        if (($model = Todolist::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
