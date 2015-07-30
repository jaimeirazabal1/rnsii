<?php

namespace frontend\controllers;
use app\models\Usuario;
use Yii;
class UsuarioController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionRegistro(){
        $modelo = new Usuario();
        if ($modelo->load(Yii::$app->request->post())) {
            $modelo->fecha_registro = date("Y-m-d H:i:s");
            $modelo->generateAuthKey();
            $modelo->generateAccessToken();
            
            if ($modelo->save()) {
                Yii::$app->session->setFlash('success', "ok");
          
            }else{
                Yii::$app->session->setFlash('error', "no");
               
                
            }
        }   
        return $this->render("registro",['model'=>$modelo]);
    }

}
