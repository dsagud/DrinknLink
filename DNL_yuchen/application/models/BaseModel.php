<?php
	class BaseModel { 		
		protected $dbconn;
		 
		public function __construct() { 
			$this->dbconn = new DatabaseConnection();					
		}

		function __destruct() {	
			 
		}		
	}
?>