<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}



	public function autocomplete($skill){
		$query = "SELECT * FROM tbl_skills WHERE skill LIKE '%$skill%'";
		$getSkill = $this->db->select($query);
		$result= "";
		$result.="<div class='skill'><ul>";
		if ($getSkill) {
			while ($data = $getSkill->fetch_assoc()) {
				$result.= "<li>".$data['skill']."</li>";
			}
		}else{
			$result.= "<li>No Result Found</li>";
		}
		$result.="</ul></div>";
		echo $result;
	}

	
}
?>