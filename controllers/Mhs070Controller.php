<?php

namespace app\controllers;

use app\models\Mhs070;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs070Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs070::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mhs070;
        $mhs->no_induk_mahasiswa = '60200121070-'.rand(100,999);
        $mhs->nama_mahasiswa = 'Muhammad Alif Hardhy Anugrah';
        $mhs->kelas = 'A';
        $mhs->status = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs070::findOne(['id' => $id]);
        if($mhs !== null){
            $mhs->kelas = 'C';
            $mhs->status = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs070::findOne(['id' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mhs070::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}
