<?php

use app\models\Mahasiswa070;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="mahasiswa-070-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'Id',
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        'profil070.Foto_profil',

        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Mahasiswa070 $model, $key, $index, $column){
                return Url::toRoute([$action, 'Id' => $model->Id]);
            }
        ]
    ]
]); ?>
</div>