<?php

namespace app\controllers;
use app\models\Buku;
use yii\data\ActiveDataProvider;

class BukuController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Buku::find();
        $dataProvider = new ActiveDataProvider ([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $buku = new Buku;
        if ($buku->load($this->request->post()) && $buku->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('create', ['buku' => $buku]);
    }

    public function actionUpdate($id = '')
    {
        $buku = Buku::findOne(['id' => $id]);
        if ($buku->load($this->request->post()) && $buku->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', ['buku' => $buku]);
        
    }
    public function actionDelete($id = '')
    {
        $buku = Buku::findOne(['id' => $id]);
        if ($buku->delete()) {
            return $this->redirect(['index']);
        }
    }

}
