<?php
	class Router { 
		private $table = array(); 
		 
		public function __construct() { 
			$this->table['home'] = new Route('BaseModel', 'HomeView', 'BaseController');
			$this->table['registerbar'] = new Route('UserModel', 'RegisterBarOwnerView', 'AuthController');	
			$this->table['auth'] = new Route('UserModel', 'RegisterBarOwnerView', 'AuthController');
			$this->table['login'] = new Route('UserModel', 'LoginView', 'AuthController');	
			$this->table['barowner'] = new Route('BarOwnerModel', 'BarOwnerHomeView', 'BarOwnerController');	
		} 
		
		public function addRoute($identifier, Route $route){
			$identifier = strtolower($identifier);
			$this->table[$identifier] = $route;
		}
		 
		public function getRoute($route) { 
			$route = strtolower($route);
			return $this->table[$route];         
		} 
	} 
?>