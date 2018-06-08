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
class Comments extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'comments';
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [[], 'required']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id) {
        return static::findOne(['id' => $id]);
    }
    public static function findIdentityByAuthkey($authkey) {
        return static::findOne(['authkey' => $authkey]);
    }

    public function GenerateCommentAuthkey()
    {
        return Yii::$app->security->generateRandomString(32);
    }
    
}
