<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(Request $request): string|false
    {
        if ($request->isPost()) {
            return 'handle submitted login data';
        }
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request): string|false
    {
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }
            return 'handle submitted registration data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
