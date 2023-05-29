<?php
    use yii\helpers\Html;
    use yii\widgets\ActionForm;
?>

<?php $form = ActionForm::begin() ?>

<?=  $form->field($buku, 'kode_buku') ?>
<?=  $form->field($buku, 'judul') ?>
<?=  $form->field($buku, 'jml_item') ?>

<?=
    Html::submitButton('Save', ['class' => 'btn btn-primary'])
?>

<?php ActiveForm::end() ?>