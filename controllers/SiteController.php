<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): string|false
    {
        $params = [
            'name' => 'Peter Mumford'
        ];
        return $this->render('home', $params);
    }

    public function contact(): string|false
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request): array
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return $body;
    }
}
