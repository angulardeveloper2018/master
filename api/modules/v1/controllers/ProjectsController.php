<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use api\modules\v1\models\Projects;
use api\modules\v1\models\Tasks;
use Yii;
use SSP;
use api\modules\v1\component\Response;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class ProjectsController extends ActiveController {

    public $modelClass = 'api\modules\v1\models\Projects';

    public function actionListProjects(){
        // return array('status' => 1, 'msg' => 'asd', 'data'=>(\Yii::$app->request->post()));
            $projectData = Projects::FindAllProjects();
            return Response::ReturnResponse(1, 'projectListing',$projectData); 
    }
    public function actionProjectDetail(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $projectData = Projects::findIdentityByAuthkey($post['authkey']);
            if($projectData) {
                unset($projectData['id']);
                return Response::ReturnResponse(1, 'projectData',$projectData); 
            } else {
                return Response::ReturnResponse(0, 'Please enter valid data'); 
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }
    public function actionSaveProject(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $projectData = Projects::findIdentityByAuthkey($post['authkey']);
            if($projectData) {
                $projectData->name = $post['name'];
                if ($projectData->save()) {
                    return Response::ReturnResponse(1, 'Project detail has been updated.',$projectData); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            } else {
                $data = array(
                    'name'=>$post['name'],
                    'authkey'=>Projects::GenerateProjectAuthkey(),
                    'createddate'=>time()
                );

                $saveProject = new Projects($data);
                if ($saveProject->save()) {
                    return Response::ReturnResponse(1, 'Project detail has been saved.',$saveProject); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }

    public function actionDeleteProject(){
        if (\Yii::$app->request->post()) {
            $post = \Yii::$app->request->post();
            $projectData = Projects::findIdentityByAuthkey($post['authkey']);
            if($projectData) {
                $projectData = Projects::findIdentityByAuthkey($post['authkey']);
                Tasks::deleteAll(['project_id' => $projectData['id']]);
                if ($projectData->delete()) {
                    return Response::ReturnResponse(1, 'Project deleted.',$projectData); 
                } else {
                    return Response::ReturnResponse(0, 'Try again later.'); 
                }
            } else {
                return Response::ReturnResponse(0, 'Project not found.'); 
            }
        }else {
           return Response::ReturnResponse(0, 'Please enter valid data'); 
        }
    }

}
