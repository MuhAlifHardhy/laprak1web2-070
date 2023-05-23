<?php

namespace app\controllers;
use app\models\Obat070;
use yii\data\ActiveDataProvider;

class Obat070Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat070::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
