<?php

namespace app\controllers;
use app\models\Matakuliah;
use yii\data\ActiveDataProvider;

class MataKuliahController extends \yii\web\Controller
{
    public function actionBatalKrs()
    {
        return $this->render('batal-krs');
    }

    public function actionIndex()
    {
        $query = Matakuliah::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }


}