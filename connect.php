<?php 
	class Connection{
		protected $db;

		function __construct($host, $user, $password, $database){
			$this->db = new PDO("mysql:host=".$host.";dbname=".$database.";charset=utf8", $user, $password);	
		}
	}
?>	