<?php

namespace app\controllers;

use Yii;


class Repdf extends \mPDF {
    public function gerarPdf() {
        $pdf = Yii::$app->pdf;
        $pdf->content = "teste diego";
        return $pdf->render();
        
    }
}
