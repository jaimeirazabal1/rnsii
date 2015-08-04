<?php

namespace frontend\controllers;
use app\models\Usuario;
use Yii;
class UsuarioController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $usuarios = Usuario::find()->joinWith('role')->with('institucion')->all();
       
        return $this->render('index',['usuarios'=>$usuarios]);
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
    }/**
     * 
     * Editar usuario
     * @param type $id
     * @return type
     */
    public function actionEditar($id){
        $modelo = new Usuario();
        if ($modelo->load(Yii::$app->request->post()) and $model->save()) {
            Yii::$app->session->setFlash('success','Usuario Editado con éxito!');
        }else{
            $usuario = $modelo->findOne(['id'=>$id]);
            return $this->render("editar",['model'=>$usuario]);
        }
        return $this->render("editar",['model'=>$modelo]);
    }
    /**
     * borrar usuario
     * @param type $id
     * @return type
     */
    public function actionBorrar($id){
        $modelo = new Usuario();
        if ($modelo->load(Yii::$app->request->post())) {
            
        }else{
            $usuario = $modelo->findOne(['id'=>$id]);
            return $this->render("editar",['model'=>$usuario]);
        }
        return $this->render("editar",['model'=>$modelo]);
    }
    /**
     * cambiar contraseña al usuario
     * @param type $id
     */
    public function actionCambiarpassword($id){
       $modelo = new Usuario();
       
       return $this->render("cambiarpassword",['model'=>$modelo->findOne(['id'=> $id]),'id'=>$id]);
    }
    /**
     * 
     */
    public function actionPasswordupdate(){
        $modelo = new Usuario();
        if ($parametros = Yii::$app->request->post()) {
            if ($parametros['password'] == $parametros['repeat_password'] ) {
                $usuario = $modelo->findOne(['id'=>$parametros['Usuario']['id']]);
                $usuario->setPassword($parametros['password']);
                $usuario->repeat_password=$parametros['repeat_password'];
                if($usuario->update(false)){
                    Yii::$app->session->setFlash('success','Usuario Editado con éxito!');
                }else{
                    $errores = $usuario->getErrors();
                    foreach($usuario->getErrors() as $key => $value){
                        for($i = 0 ; $i < count($value); $i++){
                            Yii::$app->session->setFlash('danger','El campo '.$key. ' '. $value[$i]);
                        }
                        
                    }
                    
                    
                }
                 Yii::$app->response->redirect(array('usuario/cambiarpassword','id'=>$parametros['Usuario']['id']));
            }else{
                Yii::$app->session->setFlash('warning','Las contraseña deben ser iguales exactamente');
                Yii::$app->response->redirect(array('usuario/cambiarpassword','id'=>$parametros['Usuario']['id']));
            }
            
        }
    }
}
