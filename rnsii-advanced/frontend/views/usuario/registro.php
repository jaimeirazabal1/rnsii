<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
$this->title = 'Registro de Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
    foreach(Yii::$app->session->getAllFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<div class="container">
    <h1>Registro de Usuario</h1>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'institucion_id')->DropDownList(ArrayHelper::map(\app\models\Institucion::find()->all(), 'id', 'nombre_institucion' ),[ 'prompt' => 'Seleccione una institución' ]) ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'nombres')->textInput(['placeholder'=>'Nombres']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'apellidos')->textInput(['placeholder'=>'Apellidos']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'cedula')->textInput(['placeholder'=>'Cédula']) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'cargo')->textInput(['placeholder'=>'Cargo']) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'tlf')->textInput(['placeholder'=>'Teléfono']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'Nombre de Usuario']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'correo')->textInput(['placeholder'=>'Correo']) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'repeat_password')->passwordInput() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'role_id')->DropDownList(ArrayHelper::map(\app\models\Role::find()->all(), 'id', 'nombre_role' ),[ 'prompt' => 'Seleccione un rol de usuario' ]) ?>
                </div>
            </div>
        </div>
        
        
    </div>
     
        
        <div class="form-group">
            <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>

