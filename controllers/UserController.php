<?php

namespace app\controllers;

use yii\web\Controller;

class UserController extends Controller{

    public function actionJoin()
    {
        return $this->render('join.php');
    }
    public function actionLogin()
    {
        return $this->render('login.php');
    }

}
