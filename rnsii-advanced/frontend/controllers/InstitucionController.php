<?php

namespace app\controllers;

class InstitucionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegistro()
    {
        return $this->render('registro');
    }

}
