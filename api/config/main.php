<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'timeZone' => 'US/Central',
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'   // here is our v1 modules
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'request' => [
            'class' => '\yii\web\Request',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser'
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            //'pagination' => false,
            'rules' => [
                [ 'class' => 'yii\rest\UrlRule',
                    'controller' => ['v1/projects','v1/tasks','v1/login'],
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
                ],

                'POST v1/projects/list-projects' => 'v1/projects/list-projects', //for project list
                'POST v1/projects/project-detail' => 'v1/projects/project-detail', //for project detail
                'POST v1/projects/save-project' => 'v1/projects/save-project', //for save project detail
                'POST v1/projects/delete-project' => 'v1/projects/delete-project', //for delete project
                
                'POST v1/tasks/list-tasks' => 'v1/tasks/list-tasks', //for task list
                'POST v1/tasks/task-detail' => 'v1/tasks/task-detail', //for task detail
                'POST v1/tasks/save-task' => 'v1/tasks/save-task', //for save task detail
                'POST v1/tasks/delete-task' => 'v1/tasks/delete-task', //for delete task
                'POST v1/tasks/add-comment' => 'v1/tasks/add-comment', //for add comment
                
                'POST v1/login/check-login' => 'v1/login/check-login', //for check login
                'POST v1/login/logout' => 'v1/login/logout', //for logout

            ],
        ]
    ],
    'params' => $params,
];

