<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Institucion;
/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?php 
            $instituciones = Institucion::find()->asArray()->all();
            $map = ArrayHelper::map($instituciones, "id", "nombre_institucion");
            echo $form->field($model, 'institucion_id')->dropDownList($map,['prompt'=>"Selecciona una Institucion"]);
            ?>
            <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'tlf')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'role_id')->textInput() ?>
        </div>
    </div>
   
    



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
