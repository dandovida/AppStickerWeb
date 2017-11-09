<?php

namespace frontend\modules\modulousuario\controllers;

use Yii;
use frontend\modules\modulousuario\models\Persona;
use frontend\modules\modulousuario\models\search\PersonaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonaController implements the CRUD actions for Persona model.
 */
class PersonaController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Persona models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PersonaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Persona model.
     * @param integer $Id_Persona
     * @param integer $Id_Empresa
     * @return mixed
     */
    public function actionView($Id_Persona, $Id_Empresa)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Persona, $Id_Empresa),
        ]);
    }

    /**
     * Creates a new Persona model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Persona();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Persona' => $model->Id_Persona, 'Id_Empresa' => $model->Id_Empresa]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Persona model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id_Persona
     * @param integer $Id_Empresa
     * @return mixed
     */
    public function actionUpdate($Id_Persona, $Id_Empresa)
    {
        $model = $this->findModel($Id_Persona, $Id_Empresa);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Persona' => $model->Id_Persona, 'Id_Empresa' => $model->Id_Empresa]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Persona model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id_Persona
     * @param integer $Id_Empresa
     * @return mixed
     */
    public function actionDelete($Id_Persona, $Id_Empresa)
    {
        $this->findModel($Id_Persona, $Id_Empresa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Persona model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id_Persona
     * @param integer $Id_Empresa
     * @return Persona the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Persona, $Id_Empresa)
    {
        if (($model = Persona::findOne(['Id_Persona' => $Id_Persona, 'Id_Empresa' => $Id_Empresa])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
