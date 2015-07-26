<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'institucion_id',
                'value'=>'institucion.nombre_institucion'
            ],
            
            'nombres',
            'apellidos',
            'cedula',
            // 'cargo',
            // 'correo',
            // 'tlf',
            // 'username',
            // 'password',
            // 'fecha_registro',
            // 'usuario_id_activo',
            // 'fecha_login',
            // 'role_id',
            ['attribute'=>'role_id','value'=>'role.nombre_role'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
