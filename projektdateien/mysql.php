<?php 
class DB {
	private static $_db_username 		= "db_user";
	private static $_db_password 		= "r8fYXPZcnJ5ym2a5";
	private static $_db_host 			= "localhost";
	private static $_db_name			= "eventmanager";
	private static $_db;

	function __construct() {
		try {
		self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name,  self::$_db_username , self::$_db_password);
		} catch(PDOException $e) {
			echo "Datenbankverbindung gescheitert!";
			die();
		}
	}
	
	function isUserLoggedIn() {
		$stmt = self::$_db->prepare("SELECT user_id FROM users WHERE user_session=:sid");
		$sid = session_id();
		$stmt->bindParam(":sid", $sid);
		$stmt->execute();
		
		if($stmt->rowCount() === 1) {
			return true;
		} else {
			return false;
		}
	}
	
	function login($nickname, $pw) {
		$stmt = self::$_db->prepare("SELECT user_id FROM users WHERE user_nickname=:nickname AND user_password=:pw");
		$stmt->bindParam(":nickname", $nickname);
		$stmt->bindParam(":pw", $pw);
		$stmt->execute();

		if($stmt->rowCount() === 1) {
			$stmt = self::$_db->prepare("UPDATE users SET user_session=:sid WHERE user_nickname=:nickname AND user_password=:pw");
			$sid = session_id();
			$stmt->bindParam(":sid", $sid);
			$stmt->bindParam(":nickname", $nickname);
			$stmt->bindParam(":pw", $pw);
			$stmt->execute();
			
			return true;
		} else {
			return false;
		}	
	}
	
	function logout() {
		$stmt = self::$_db->prepare("UPDATE users SET user_session='' WHERE user_session=:sid");
		$sid = session_id();
		$stmt->bindParam(":sid", $sid);
		$stmt->execute();
	}
	
	function getAllEntries($sort = "DESC") {
		if($sort != "ASC" && $sort != "DESC") {
			return -1;
		}
		$stmt = self::$_db->prepare("SELECT * FROM events ORDER BY event_id " . $sort);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function createLocation($name, $strasse, $nr, $ort, $beschreibung) {
		$stmt = self::$_db->prepare("INSERT INTO locations VALUES('', :name, :strasse, :nr, :ort, :beschreibung)");
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":strasse", $strasse);
		$stmt->bindParam(":nr", $nr);
		$stmt->bindParam(":ort", $ort);
		$stmt->bindParam(":beschreibung", $beschreibung);
		if($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
	
	function createEvent($name, $datum, $location, $beschreibung) {
		$stmt = self::$_db->prepare("INSERT INTO events VALUES('', :name, :datum, :location, :beschreibung)");
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":datum", $datum);
		$stmt->bindParam(":location", $location);
		$stmt->bindParam(":beschreibung", $beschreibung);
		if($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
?>