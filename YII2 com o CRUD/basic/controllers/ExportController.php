<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use kartik\mpdf\Pdf;
class ExportController extends Controller
{
    public function actionExportPdf($header, $title) {    
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8, 
            'content' => $this->renderPartial('index'),
            // A4 paper format
            'format' => Pdf::FORMAT_A4, 
            // portrait orientation
            'orientation' => Pdf::ORIENT_LANDSCAPE, 
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '
            table{
                width:100%;
            }
            table, th, td {
                border: 0.1px solid black;
                border-collapse: collapse;
            }', 
             // set mPDF properties on the fly
            'options' => ['title' => $title],
             // call mPDF methods on the fly
            'methods' => [ 
                'SetHeader'=>$header, 
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
     
        // return the pdf output as per the destination setting
        return $pdf->render(); 
    }    
}