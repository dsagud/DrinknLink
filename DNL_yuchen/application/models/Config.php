<?php
	class Config {
		static $confArray;

		public static function read($name){
			return (empty(self::$confArray[$name])) ? false : self::$confArray[$name];			
		}

		public static function write($name, $value){
			self::$confArray[$name] = $value;
		}	
	}
?>