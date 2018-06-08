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
class Projects extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'projects';
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name'], 'required']
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
    public static function findAllProjects() {
        $sql = "SELECT authkey, name FROM projects AS p ORDER by p.name";
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }
    public function GenerateProjectAuthkey()
    {
        return Yii::$app->security->generateRandomString(32);
    }
    
}
