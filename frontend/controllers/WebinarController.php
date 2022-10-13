<?php

namespace frontend\controllers;

use frontend\models\Webinar;
use frontend\models\WebinarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WebinarController implements the CRUD actions for Webinar model.
 */
class WebinarController extends Controller
{ 
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Webinar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Webinar();
        $searchModel = new WebinarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Webinar model.
     * @param int $id_webinar Id Webinar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_webinar)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_webinar),
        ]);
    }

    /**
     * Creates a new Webinar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Webinar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_webinar' => $model->id_webinar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Webinar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_webinar Id Webinar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_webinar)
    {
        $model = $this->findModel($id_webinar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_webinar' => $model->id_webinar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Webinar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_webinar Id Webinar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_webinar)
    {
        $this->findModel($id_webinar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Webinar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_webinar Id Webinar
     * @return Webinar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_webinar)
    {
        if (($model = Webinar::findOne(['id_webinar' => $id_webinar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Displays webinar-details-1 page.
     *
     * @return mixed
     */
    public function actionWebinarDetails()
    {
        return $this->render('webinar-details');
    }
}
