<?php

namespace backend\controllers;

use Yii;
use backend\models\Lomba;
use backend\models\LombaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
        $searchModel = new LombaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
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
            $model->file_upload = UploadedFile::getInstance($model, 'file_upload');
            if ($model->file_upload) {
                $fileName = $model->file_upload->baseName . "-" . uniqid() . "-" . $model->file_upload->extension;
                $model->file_upload->saveAs('@frontend/web/uploads/' . $fileName);
                $model['gambar_lomba'] = $fileName;
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
                }
            } else {
                $model['gambar_lomba'] = '';
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
                }
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

        if ($this->request->isPost) {

            $model->file_upload = UploadedFile::getInstance($model, 'file_upload');
            if ($model->file_upload) {
                $fileName = $model->file_upload->baseName . "-" . uniqid() . "-" . $model->file_upload->extension;
                $model->file_upload->saveAs('@frontend/web/uploads/' . $fileName);
                $model['gambar_lomba'] = $fileName;
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
                }
            } else {
                $model['gambar_lomba'] = '';
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id_lomba' => $model->id_lomba]);
                }
            }
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

    // public function actionExportPdf()
    // {
    //     $searchModel = new LombaSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //     $html = $this->renderPartial('data_lomba',['dataProvider'=>$dataProvider]);
    //     $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);  
    //     $mpdf->SetDisplayMode('fullpage');
    //     $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
    //     $mpdf->WriteHTML($html);
    //     $mpdf->Output();
    //     exit;
    // }

}
