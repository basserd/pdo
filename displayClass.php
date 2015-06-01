<?php
require('connect.php');

class ShowContent extends Connection{
	private $conn;

	function __construct(){
		$this->conn = new Connection("localhost", "root", "", "pdo");
		$this->db = $this->conn->db;	
	}

	public function getUsers(){
		$query = 'SELECT * FROM users';
		$stmt = $this->db->prepare($query);

		if($stmt->execute()){
			$users = array();

			while($row = $stmt->fetch()){
				$users[] = array('id' => $row['id'], 'name' => $row['name'], 'email' => $row['email'], 'age' => $row['age']);
			} 

			echo '<table>';
			echo '<tr>';
			echo '<th>Naam</th><th>Email</th><th>Leeftijd</th>';
			echo '</tr>';
			
			foreach($users as $user){
				echo '<tr>';
				echo '<td>' . $user['name'] . '</td>';
				echo '<td>' . $user['email'] . '</td>';				
				echo '<td>' . $user['age'] . '</td>';	
				echo '</tr>';
			}
			echo '</table>';
		}
	}
}