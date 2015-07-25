<?php
/* @var $this yii\web\View */
use \yii\helpers\Html;
$this->title = 'Escritorio';
?>
<div class="site-index">

<?= Html::a('Usuarios', ['usuario/index'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Instituciones', ['institucion/index'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Roles de Usuario', ['role/index'], ['class' => 'btn btn-primary']) ?>
</div>
