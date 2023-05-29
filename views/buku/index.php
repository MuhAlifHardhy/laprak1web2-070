<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>
<?=
    Html::submitButton('Buku Baru'[create],['class' => 'btn btn-primary'])
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id',
            'kode_buku',
            'judul',
            'jml_item',
            ['class' => ActionColumn::className()]
        ]
    ])
?>