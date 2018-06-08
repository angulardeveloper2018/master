<?php
namespace api\modules\v1\component;
use Yii;
use yii\base\NotSupportedException;
use \yii\web\IdentityInterface;

/**
 * THis component is used for return the response for any API
 * 
 */
class SendMails 
{
    public function ReturnSendMailResponse($toEmail,$subject,$emailContent)
    {
        $Email = \Yii::$app->mailer->compose();
        $Email->setFrom(\Yii::$app->params['fromemail']);
        $Email->setTo($toEmail);
        $Email->setSubject($subject);
        $Email->setHtmlBody($emailContent);
        if($Email->send()){
            return true ;
        }else {
            return false;
        }
    }
}
