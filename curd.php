<?php 
	
	class myCURD{

		private $db;

		public function __construct($DB_conn){
			$this->db = $DB_conn;
		}

		public function create($description,$status,$due_date){
			try{
				$stm= $this->db->prepare("INSERT INTO todo(description,status,due_date,created,modified) VALUES(:description, :status, :due_date, now(),'')");
				$stm->bindparam(":description",$description);
				$stm->bindparam(":status",$status);
				$stm->bindparam(":due_date",$due_date);
			return $stm->execute();
			//return true;
		}catch(PDOException $e){
		echo $e->getMessage();
		return false;
	}

		}

		

	}


 ?>