<?php

namespace api\modules\v1\models;

use Yii;
use yii\base\NotSupportedException;
use \yii\db\ActiveRecord;
use \yii\behaviors\TimestampBehavior;

/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Login extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'users';
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['email'], 'required']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return static::findOne(['id' => $id]);
    }
    public static function CheckLogin($post) {
        return static::findOne(['email' => $post['email'], 'password'=>md5($post['password']) ]);
    }
    public function GenerateUserAuthkey()
    {
        return Yii::$app->security->generateRandomString(32);
    }
    
}
