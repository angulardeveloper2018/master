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
class Tasks extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'tasks';
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

    public static function FindAllTasksByProject($project_authkey) {
        $sql = "SELECT authkey, name FROM tasks AS t WHERE t.project_authkey='".$project_authkey."' ORDER by t.name";
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }
    public static function findAllTasks() {
        $sql = "SELECT authkey, name FROM tasks AS t ORDER by t.name";
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }
    public function GenerateTaskAuthkey()
    {
        return Yii::$app->security->generateRandomString(32);
    }
    
}
