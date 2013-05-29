<?php	
	class FrontController { 
		private $controller; 
		private $view; 
		 
		public function __construct(Router $router, $routeName, $action = null, $id = null) { 
			$route = $router->getRoute($routeName); 
			$modelName = $route->model;
			$controllerName = $route->controller; 
			$viewName = $route->view; 
			
			$model = new $modelName; 
			$this->controller = new $controllerName($model);
			
			if($this->controller->requestsAuthentication()){
				$this->controller->checkLoginStatus();				
			}
					
			if (!empty($action)) {
				$this->controller->{$action}($id); 
			}
			
			if($this->controller->hasAskedForRouteRedirect()){
				header('Location: /' . $this->controller->getRedirectRoute());
			} else {					
				$viewName = ($this->controller->hasAskedForViewRedirect()) ? $this->controller->getRedirectView() : $viewName;			
				$this->view = new $viewName($routeName, $model);
			}
		} 
		 
		public function output() {
			return $this->view->output(); 
		}					
	} 
?>