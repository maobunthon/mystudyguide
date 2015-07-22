<?php
//include_once("class.php");
class admin extends main{
	function adm_id($adm_id){return $adm_id;}
	function fullname($fullname){return $fullname;}
	function name($name){return $name;}
	function pass($pass){return $pass;}
	function dob($rank){return $dob;}
	function email($email){return $email;}
	function phone($phone){return $phone;}
	function status($status){return $status;}
	function active($active){return $active;}
	function addDate($addDate){return $addDate;}

	function admin_process($opt,$id=""){
		if($opt=="insert"){
			$adm_id="";
			$fullname=$this->fullname;
			$name=$this->name;
			$pass=$this->pass;
			$dob=$this->dob;
			$email=$this->email;
			$phone=$this->phone;
			$status=$this->status;
			$active=$this->active;
			$addDate=$this->addDate;
			$table=ADMIN_USER;
			$this->returnQuery("insert into $table values
			('','$fullname','$name','$pass',
			'$dob','$email','$phone','$status','$active','$addDate')");	
		}
	}
}
$obj=new admin();

?>