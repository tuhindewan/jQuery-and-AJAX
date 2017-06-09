<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}


	public function userCheck($data){
		$query = "SELECT * FROM tbl_users WHERE username = '$data'";
		$getuser = $this->db->select($query);

		if ($getuser=='') {
			echo "<span class='error'>Please Enter Username.</span>";
			exit();
		}elseif ($getuser) {
			echo "<span class='error'><b>$username<\b> Not Available.</span>";
			exit();
		}else{
			echo "<span class='success'><b>$username<\b> is Available.</span>";
			exit();
		}
	}

	
}
?>