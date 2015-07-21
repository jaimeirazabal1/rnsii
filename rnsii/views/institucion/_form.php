<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Institucion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institucion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rif_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_institucion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tlf_contacto_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_solicitante_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_institucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlf_institucion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
