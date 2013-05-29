<?php
	class BaseView { 
		protected $model; 
		protected $route; 
		protected $template_dir;
		protected $template_file=null;
		protected $vars = array();
		protected $jsSource = array();
		protected $cssSource = array();
				 
		public function __construct($route, BaseModel $model) { 
			$this->route = $route; 
			$this->model = $model; 				
		} 
		
		public function setTemplate($template_file){
			$this->template_file = $template_file;
		}
		
		 
		public function output() {						
			if(Config::read('directories.templates') !== null && $this->template_file !== null) {            
				$this->template_dir = Config::read('directories.templates');
				
				if (file_exists($this->template_dir . $this->template_file)) {				
					ob_start();				
					include($this->template_dir . $this->template_file);
					return ob_get_clean();					
				} else {
					throw new Exception('no template file ' . $this->template_file . ' present in directory ' . $this->template_dir);
				}				
			}					
		} 
		
		public function loadSnippet($snippet_file){			
			if(Config::read('directories.snippets') !== null && !empty($snippet_file) && file_exists(Config::read('directories.snippets') . $snippet_file)) {            		
				include(Config::read('directories.snippets') . $snippet_file);				
			} else {
				throw new Exception('no snippet file ' . $snippet_file . ' present in directory ' . Config::read('directories.snippets'));
			}
		}

		public function __set($name, $value) {
			$this->vars[$name] = $value;
		}
		
		public function __get($name) {
			return $this->vars[$name];
		}
		
		public function addScriptSrc($src){
			if(!in_array($src, $this->jsSource)){
				array_push($this->jsSource, $src);
			}
		}
		
		public function addCSSSrc($src){
			if(!in_array($src, $this->cssSource)){
				array_push($this->cssSource, $src);
			}
		}
		
		public function loadScriptFiles(){
			$str = '';      
			foreach($this->jsSource as $src){
				$str .= '<script type="text/javascript"  src="' . $src . '"></script>';
			}
			return $str;
		}
		
		public function loadCSSFiles(){
			$str = '';      
			foreach($this->cssSource as $src){
				 $str .= '<link href="' . $src . '" rel="stylesheet" type="text/css" media="screen" />';
			}
			return $str;
		}
		
		public function clean($str){
			return htmlentities($str, ENT_QUOTES, 'UTF-8');
		}
	} 
?>