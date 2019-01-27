<?php

class DAO {

  // Properties
  private static $dbHost = "ID276356_major3.db.webhosting.be";
	private static $dbName = "ID276356_major3";
	private static $dbUser = "ID276356_major3";
	private static $dbPass = "isbeveren2018";
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

		if(empty(self::$sharedPDO)) {
			self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
