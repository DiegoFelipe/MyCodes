<?php

namespace app\controllers;


use yii\base\Controller;

class HelloController extends Controller
{
    public function actionSaySomething($message='Hello'){
        return $this->render('say-something',array('message' => $message));
    }
}