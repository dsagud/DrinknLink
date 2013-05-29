<?php
	class Uploader {		
		private $destination;
		private $file;		
		
		public function __construct($destination){			
			if(!empty($destination) && !is_dir($destination)){
				mkdir($destination, 0777, true);				
			}
			$this->destination = $destination;
		}

		public function __destruct(){
		}		
		
		public function doUpload($upload){	
			if($this->destination){
				if(move_uploaded_file($upload['tmp_name'], $this->destination . $upload['name'])){
					$this->file = $this->destination . $upload['name'];
					return true;
				} else { return false; }				
			} else { return false; }		
		}
		
		public function getDestination(){
			return $this->destination;
		}
		
		public function getFile(){
			return $this->file;
		}
	}
?>