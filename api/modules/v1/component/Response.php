<?php
namespace api\modules\v1\component;
use Yii;
use yii\base\NotSupportedException;
use \yii\web\IdentityInterface;

/**
 * THis component is used for return the response for any API
 * 
 */
class Response 
{
    public static function ReturnResponse($status,$messsage,$data=null)
    {
        return $arr = array('status' => $status, 'msg' => $messsage, 'data'=>$data);     
    }
}
