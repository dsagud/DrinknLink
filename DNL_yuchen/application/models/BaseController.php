<?php
	class BaseController { 
		protected $model; 
		protected $post;
		protected $get;
		protected $files;
		protected $askForViewRedirect = false;
		protected $askForRouteRedirect = false;
		protected $redirectView;
		protected $redirectRoute;
		protected $requiresAuthentication = false;

		public function getName() { 
			return 'Controller'; //In the real world this may well be get_class($this), and this method defined in a parent class. 
		} 
		
		public function __construct(BaseModel $model) { 
			$this->model = $model; 
			$this->post = $_POST;
			$this->get = $_GET;
			$this->files = $_FILES;
		}
		
		public function locale($id){			
			$_SESSION['locale'] = (in_array($id, Config::read('available_locales.locale'))) ? $id : Config::read('website.default_locale');
		}
		
		public function hasAskedForViewRedirect(){
			return $this->askForViewRedirect;
		}
		
		public function hasAskedForRouteRedirect(){
			return $this->askForRouteRedirect;
		}
		
		public function requestViewRedirect($view){
			 $this->askForViewRedirect = true;
			 $this->redirectView = $view;
		}
		
		public function getRedirectView(){
			return $this->redirectView;
		}
		
		public function requestRouteRedirect($route){
			 $this->askForRouteRedirect = true;
			 $this->redirectRoute = $route;
		}
		
		public function getRedirectRoute(){
			return $this->redirectRoute;
		}
		
		public function requestsAuthentication(){
			return $this->requiresAuthentication;
		}	
		
		public function checkLoginStatus(){
			if(isset($_SESSION['uid']) && session_id() == $_SESSION['sid']){
			
			} else {
				$this->askForRouteRedirect = true;
			 $this->redirectRoute = 'login';
			}			
		}	
	} 
?>