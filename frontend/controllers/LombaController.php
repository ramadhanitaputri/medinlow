<?php

namespace frontend\controllers;

use frontend\models\Lomba;
use frontend\models\LombaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LombaController implements the CRUD actions for Lomba model.
 */
class LombaController extends Controller
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
     * Lists all Lomba models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Lomba();
        $searchModel = new LombaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lomba model.
     * @param int $id_lomba Id Lomba
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_lomba)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_lomba),
        ]);
    }

    /**
     * Creates a new Lomba model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Lomba();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lomba model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_lomba Id Lomba
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_lomba)
    {
        $model = $this->findModel($id_lomba);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lomba model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_lomba Id Lomba
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_lomba)
    {
        $this->findModel($id_lomba)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lomba model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_lomba Id Lomba
     * @return Lomba the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_lomba)
    {
        if (($model = Lomba::findOne(['id_lomba' => $id_lomba])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Displays lomba-details-1 page.
     *
     * @return mixed
     */
    public function actionLombaDetails()
    {
        return $this->render('lomba-details');
    }

    /**
     * Displays lomba-details-2 page.
     *
     * @return mixed
     */
    public function actionLombaDetails2()
    {
        return $this->render('lomba-details-2');
    }

    /**
     * Displays lomba-details-3 page.
     *
     * @return mixed
     */
    public function actionLombaDetails3()
    {
        return $this->render('lomba-details-3');
    }
}
