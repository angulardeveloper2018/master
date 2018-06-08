<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use api\modules\v1\models\Tasks;
use api\modules\v1\models\Projects;
use api\modules\v1\models\Comments;
use Yii;
use SSP;
use api\modules\v1\component\Response;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class TasksController extends ActiveController {

    public $modelClass = 'api\modules\v1\models\Tasks';

    public function actionListTasks(){
        // return array('status' => 1, 'msg' => 'asd', 'data'=>(\Yii::$app->request->post()));
        
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $taskData = Tasks::FindAllTasksByProject($post['project_authkey']);
            return Response::ReturnResponse(1, 'taskListing',$taskData);
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }
    public function actionTaskDetail(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $taskData = Tasks::findIdentityByAuthkey($post['authkey']);
            if($taskData) {
                unset($taskData['id']);
                return Response::ReturnResponse(1, 'taskData',$taskData); 
            } else {
                return Response::ReturnResponse(0, 'Please enter valid data'); 
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }
    public function actionSaveTask(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $taskData = Tasks::findIdentityByAuthkey($post['authkey']);
            if($taskData) {
                $taskData->name = $post['name'];
                if ($taskData->save()) {
                    return Response::ReturnResponse(1, 'Task detail has been updated.',$taskData); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            } else {
                $projectData = Projects::findIdentityByAuthkey($post['project_authkey']);
                if($projectData) {
                    $data = array(
                        'name'=>$post['name'],
                        'authkey'=>Tasks::GenerateTaskAuthkey(),
                        'project_id'=>$projectData['id'],
                        'project_authkey'=>$post['project_authkey'],
                        'createddate'=>time()
                    );
                }

                $saveTask = new Tasks($data);
                if ($saveTask->save()) {
                    return Response::ReturnResponse(1, 'Task detail has been saved.',$saveTask); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }

    public function actionDeleteTask(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $taskData = Tasks::findIdentityByAuthkey($post['authkey']);
            if($taskData) {
                if ($taskData->delete()) {
                    return Response::ReturnResponse(1, 'Task deleted.',$taskData); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            } else {
                return Response::ReturnResponse(0, 'Task not found.'); 
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }

    public function actionAddComment(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $taskData = Tasks::findIdentityByAuthkey($post['task_authkey']);
                $data = array(
                    'comment'=>$post['comment'],
                    'authkey'=>Comments::GenerateCommentAuthkey(),
                    'task_id'=>$taskData['id'],
                    'task_authkey'=>$post['task_authkey'],
                    'createddate'=>time()
                );

                $saveTask = new Comments($data);
                if ($saveTask->save()) {
                    return Response::ReturnResponse(1, 'comment added.',$saveTask); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }

}
