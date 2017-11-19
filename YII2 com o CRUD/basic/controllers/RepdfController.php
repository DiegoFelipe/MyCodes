<?php

namespace app\controllers;
use mpdf;
use Yii;

class RepdfController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $pdf = Yii::$app->pdf;
        $pdf->content = "teste diego";
        return $pdf->render();
        //return $this->render('index');
    }

}
