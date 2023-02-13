<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

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
            return 'handle submitted registration data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
