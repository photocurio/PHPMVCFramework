<?php

namespace app\core;

/**
 * class Router
 * @package app\core
 */
class Router
{
	public Request $request;

	protected array $routes = [];

	/**
	 * @param Request $request 
	 * @return void 
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * @param string $path 
	 * @param mixed $callback 
	 * @return void 
	 */
	public function get(string $path, mixed $callback)
	{
		$this->routes['get'][$path] = $callback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path] ?? false;
		if ($callback === false) {
			Application::$app->response->setStatusCode(404);
			return "Error 404: Not Found";
		} else if (is_string($callback)) {
			return $this->renderView($callback);
		}
		return call_user_func($callback);
	}

	public function renderView(string $view)
	{
		$layoutContent = $this->layoutContent();
		$viewContent = $this->renderOnlyView($view);
		return \str_replace('{{content}}', $viewContent, $layoutContent);
	}

	protected function layoutContent()
	{
		\ob_start();
		include_once Application::$ROOT_DIR . "/views/layouts/main.php";
		return \ob_get_clean();
	}

	/**
	 * @param string $view 
	 * @return string|false 
	 */
	protected function renderOnlyView(string $view)
	{
		\ob_start();
		include_once Application::$ROOT_DIR . "/views/$view.php";
		return \ob_get_clean();
	}
}
