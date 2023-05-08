<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfile()
    {
        return $this->render('profile');
    }

}
