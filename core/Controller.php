<?php

namespace app\core;

use app\core\Application;

class Controller
{
    public string $layout = 'main';

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render(string $view, array $params = []): string|false
    {
        return Application::$app->router->renderView($view, $params);
    }
}
