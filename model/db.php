<?php
class Db extends PDO {
	public function __construct() {
		$host = '127.0.0.1';
		$db   = 'grilo';
		$user = 'grilo';
		$pass = 'grilo';
		$charset = 'utf8';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];
		try {
			parent::__construct($dsn, $user, $pass, $options);
		} catch (\PDOException $e) {
			 throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
	}
}
?>
