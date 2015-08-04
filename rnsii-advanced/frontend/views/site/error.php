<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = 'Se produjo un error con código ' . $exception->statusCode;
?>
<div class="site-error">

    <h1><?= Html::encode('Se produjo un error con código ' . $exception->statusCode) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode( 'Se produjo un error con código ' . $exception->statusCode)) ?>
    </div>

    <p>
        Se ha producido un error, mientras que el servidor Web estaba procesando su solicitud.
    </p>
    <p>
        Póngase en contacto con nosotros si usted piensa que esto es un error en el servidor. Gracias.
    </p>

</div>
