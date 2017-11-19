<?php


namespace app\models;
use mpdf;


class reportpdf extends mpdf {
    
    public function newPdf() {
        $pdf = new pdf();
        return $pdf;
    }
    
    
}
