<?php
class Connection
{
	private $host = "localhost";
	// private $user = "root";
	private $user = "u834220418_sport";
	private $pass = "sportime1";
	// private $dbname = "SportTime";
	private $dbname = "u834220418_sport";
	public $db;
	public function __construct()
	{
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		try {
			$this->db = new PDO($dsn, $this->user, $this->pass, $options);
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
	}
}
