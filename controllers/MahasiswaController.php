<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionBatalKrs()
    {
        return $this->render('batal-krs');
    }
}
