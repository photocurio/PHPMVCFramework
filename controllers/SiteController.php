<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{
	public function Home()
	{
		$params = [
			'name' => 'Peter Mumford'
		];
		return Application::$app->router->renderView('home', $params);
	}
	public function Contact()
	{
		return Application::$app->router->renderView('contact');
	}
	public function handleContact()
	{
		return 'handle submitted data with controller';
	}
}
