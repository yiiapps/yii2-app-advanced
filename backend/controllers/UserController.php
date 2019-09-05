<?php
namespace backend\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';

    public function actionIndex()
    {
        return 1;
    }
}
