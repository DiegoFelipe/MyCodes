<?php

namespace app\controllers;
use Yii;
use mpdf;
use yii\web\Controller;

class reportpdfController extends Controller {
    
    public function actionIndex($c) {
        $model = new \app\models\reportpdf();
        $model->newPdf();
        $model->content = "teste diego";
        
        return $this->render('index', [
           'model' => $model,
            //'dataProvider' => $dataProvider,
        ]);
    }
}
