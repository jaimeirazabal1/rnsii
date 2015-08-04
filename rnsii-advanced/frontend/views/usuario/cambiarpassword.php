<h1>Cambiar Contraseña</h1>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Cambiar contraseña";
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['usuario/index']];
$this->params['breadcrumbs'][] = ['label' => 'Editar: '.$model->attributes['nombres'].' '.$model->attributes['apellidos'], 'url' => ['usuario/editar?id='.$model->attributes['id']]];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::beginForm( $action = 'passwordupdate', $method = 'post', $options = [] ); ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <?= Html::activeHiddenInput($model, "id") ?>
                <?= Html::activeLabel( $model, 'password', $options = [] );?>
                <?= Html::input('password','password',null,['class'=>'form-control','placeholder'=>'Contraseña']);?>
            </div>
            <div class="form-group">
                <?= Html::label('Verificar', $options = [] );?>
                <?= Html::input('password','repeat_password',null,['class'=>'form-control','placeholder'=>'Verificar contraseña']);?>
            </div>
            <?= Html::submitButton('Procesar',['class'=>'btn btn-default']);?>
        </div>
    </div>
<?= Html::endForm();?>


