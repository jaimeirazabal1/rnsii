<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstitucionBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institucion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre_institucion') ?>

    <?= $form->field($model, 'rif_institucion') ?>

    <?= $form->field($model, 'sigla_institucion') ?>

    <?= $form->field($model, 'direccion_institucion') ?>

    <?php // echo $form->field($model, 'tlf_contacto_institucion') ?>

    <?php // echo $form->field($model, 'nombre_solicitante_institucion') ?>

    <?php // echo $form->field($model, 'correo_institucion') ?>

    <?php // echo $form->field($model, 'tlf_institucion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
