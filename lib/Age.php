<?php

	class Age{
		private $mydbase;
		
		public function Age(){
			$this->mydbase=new AgeClass();
		}
		
		public function dbDate(){
			$query = "Select d_ob from siswa";
			return $this->mydbase->getRows($query);
		}
		public function myAge(){
			$dob = dbDate();
			$now = new date('d M Y');
			
		}
		
	}
	
?>
