<?php
//include_once("class.php");
class AdminUser extends main{
	function adm_id($adm_id){return $adm_id;}
	function adm_fullName($adm_fullName){return $adm_fullName;}
	function adm_email($adm_email){return $adm_email;}
	function adm_gender($adm_gender){return $adm_gender;}
	function adm_pass($adm_pass){return $adm_pass;}
	function adm_dob($adm_dob){return $adm_dob;}
	function adm_address($adm_address){return $adm_address;}
	function adm_phone($adm_phone){return $adm_phone;}
	function adm_status($adm_status){return $adm_status;}
	function adm_activate($adm_activate){return $adm_activate;}
	function adm_dateTime($adm_dateTime){return $adm_dateTime;}

	function adm_user_process($opt,$id=""){
		if($opt=="insert"){
			$adm_id=$this->adm_id;
			$adm_fullName=$this->adm_fullName;
			$adm_email=$this->adm_email;
			$adm_gender=$this->adm_gender;
			$adm_pass=$this->adm_pass;

			$adm_dob=$this->adm_dob;
			$adm_address=$this->adm_address;
			$adm_phone=$this->adm_phone;
			$adm_status=$this->adm_status;
			$adm_activate=$this->adm_activate;
			$adm_dateTime=$this->adm_dateTime;

			$table=ADMIN_USER;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_admUser=new AdminUser();


?>