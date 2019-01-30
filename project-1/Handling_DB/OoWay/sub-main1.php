<?php

require_once "main1.php";

class sub extends crud{

         public $first_name,      $middle_name,  $last_name,  $father_name,
                $mother_name,     $birth_date,   $gender,
                $marital_status,  $email,        $ph_no,
                $address,         $employed;


      function insertid()
      {
		$sql = "insert into tb_datacollection(first_name,middle_name,last_name,father_name,mother_name,birth_date,gender,marital_status,email,ph_no,address,employed)values(
		'$this->first_name',
		'$this->middle_name',
		'$this->last_name',
		'$this->father_name',
		'$this->mother_name',
		'$this->birth_date',
		'$this->gender',
		'$this->marital_status',
		'$this->email',
		'$this->ph_no',
		'$this->address',
		'$this->employed')";

		return $this->insert($sql);
		
	 }

	 function selectall(){
	 	$sql = "select * from tb_datacollection";
	 	return $this->select($sql);
	 }
	 function selectid(){
	 	$sql = "select * from tb_datacollection where id = $this->id";
	 	return $this->select($sql);
	 }

	 function deleteid(){
	 	$sql = "delete from tb_datacollection where id = $this->id";
	 	return $this->delete($sql);
	 }

	 function updateid(){
		$sql="update tb_datacollection set
				first_name='$this->first_name',
				middle_name='$this->middle_name',
				last_name='$this->last_name',
				father_name='$this->father_name',
				mother_name='$this->mother_name',
				birth_date='$this->birth_date',
				gender='$this->gender',
				marital_status='$this->marital_status',
				email='$this->email',
				ph_no='$this->ph_no',
				address='$this->address',
				employed='$this->employed'
			where id='$this->id'";
			return $this->update($sql);
	}

}

?>