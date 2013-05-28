<?php		
	class DatabaseConnection {
		public $dbh;
		
		public function __construct(){
			$dsn = 'mysql:dbname=' . Config::read('database.name') . ';host='.Config::read('database.host') . '';
			$user = Config::read('database.user');
			$password = Config::read('database.password');

			try {
				$this->dbh = new PDO($dsn, $user, $password);
				$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
		
		public function __destruct(){}
				
		function generateHash($password, $salt) {
			return hash('sha256', $salt . $password);
		}
		
		function generateSalt() {
			return base64_encode(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		}
	}
?>