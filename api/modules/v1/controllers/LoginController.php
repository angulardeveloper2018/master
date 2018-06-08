<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use api\modules\v1\models\Login;
use Yii;
use SSP;
use api\modules\v1\component\Response;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class LoginController extends ActiveController {

    public $modelClass = 'api\modules\v1\models\Login';

    public function actionCheckLogin(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $loginData = Login::CheckLogin($post);
            if($loginData) {
                return Response::ReturnResponse(1, 'Welcome',$loginData);
            } else {
                return Response::ReturnResponse(0, 'username or password is wrong.'); 
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
        
    }

}
