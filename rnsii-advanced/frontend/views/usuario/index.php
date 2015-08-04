<?php
$this->title = "Lista de Usuarios";
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>Lista de Usuarios</h1>
<?php if(isset($usuarios) and !empty($usuarios)): ?>
    <table></table>
<?php else: ?>
    <p>No hay usuarios registrados</p>
<?php endif; ?>
    <table class="table table-bordered table-striped table-bordered">
        <thead>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Cargo</th>
            <th>Correo</th>
            <th>Institución</th>
            <th>Role</th>
            <th></th>
        <thead>
            <?php foreach ($usuarios as $key => $value): ?>
            <tr>
                <td><?php echo $value['nombres'] ?></td>
                <td><?php echo $value['apellidos'] ?></td>
                <td><?php echo $value['cedula'] ?></td>
                <td><?php echo $value['cargo'] ?></td>
                <td><?php echo $value['correo'] ?></td>
                <td><?php echo $value['institucion']['nombre_institucion'] ?></td>
                <td><?php echo $value['role']['nombre_role'] ?></td>
                <td>
                    <?= Html::a('Editar', ['usuario/editar/','id'=>$value['id']] ,['class' => 'btn btn-primary btn-xs']) ?>
                    <?= Html::a('Borrar', ['usuario/borrar/','id'=>$value['id']] ,['class' => 'btn btn-danger btn-xs']) ?>
                </td>
        
            </tr>
            <?php endforeach ?>
    </table>
    <?= Html::a('Crear Usuario', ['registro'], ['class' => 'btn btn-default']) ?>
<?php 
