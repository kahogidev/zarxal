<?php

namespace app\modules\admin\controllers;



use app\models\Clients;
use app\modules\admin\controllers\DefaultController;
use kartik\mpdf\Pdf;


class PdfController extends DefaultController
{
    public function actionPdf($id) {
        $model = Clients::findOne($id);
        $this->layout = 'pdf';
        $content = $this->renderPartial('pdf', [
            'model' => $model
        ]);
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => "Javohir Ergashev Alisherovich's Task"],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>["Javohir Ergashev Alisherovich's Task"],
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();


    }


}