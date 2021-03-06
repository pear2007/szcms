<?php

$params = array_merge(
        require (__dir__ . '/../../common/config/params.php'), 
        require (__dir__ . '/../../common/config/params-local.php'), 
        require (__dir__ . '/params.php'), 
        require (__dir__ . '/params-local.php'));

return [
    'language' => 'en',
    'id' => 'app-frontend',
    'basePath' => dirname(__dir__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

	  'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
             'layout' => 'left-menu',//yii2-admin的导航菜单
        ]
        
    ],
	'homeUrl' => '/',
    'components' => [
  
	  

	 'request' => [
            'baseUrl' => '',
        ],
'urlManager' => [
                 
    'enablePrettyUrl' => true,
//    'enableStrictParsing' => true,    //严格的理由
    'showScriptName' => false,   //false 去掉 index.php 的的
        'rules' => [
 
            'index' => '/site/index',
            '' => '/sites/index',

           'pro'=>'pro/index',
            'news'=>'news/index',
            'page'=>'page/index',
            'gywm'=>'page/1',
            'lxwm'=>'page/2',
            'channel'=>'channel/index',
            'about'=>'site/about',
            'contact'=>'site/contact',                        
                        'signup'=>'site/signup',
                        'login'=>'site/login',

'<controller:\w+>/<id:\d+>.html'=>'<controller>/view',
//            http://www.trip.dev/sites/index?page=4
'<controller:\w+>/<page:\d+>'=>'<controller>/page?',

 
           
            ],
     ], 


		 'user' => ['identityClass' =>
            'common\models\User', 'enableAutoLogin' => true,
			],

	  
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],


	  'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',//允许访问的节点，可自行添加
            'admin/*',//允许所有人访问admin节点及其子节点
        ]
    ],


        'log' => ['traceLevel' =>
            YII_DEBUG ? 3 : 0, 'targets' => [['class' => 'yii\log\FileTarget', 'levels' => ['error',
                'warning'],],],], 'errorHandler' => ['errorAction' => 'site/error',],],
    'params' => $params,
    ];
