<?php
//include_once("class.php");
class University extends main{
	function uni_id($uni_id){return $uni_id;}
	function adm_id($adm_id){return $adm_id;}
	function uni_logo($uni_logo){return $uni_logo;}
	function uni_full_name($uni_full_name){return $uni_full_name;}
	function uni_short_name($uni_short_name){return $uni_short_name;}
	function uni_slogan($uni_slogan){return $uni_slogan;}
	function uni_rank($uni_rank){return $uni_rank;}
	function uni_isPrivate($uni_isPrivate){return $uni_isPrivate;}
	function uni_status($uni_status){return $uni_status;}
	function uni_addDate($uni_addDate){return $uni_addDate;}
	function uni_description($uni_description){return $uni_description;}

	function university_process($opt,$id=""){
		if($opt=="insert"){
			$uni_id='';
			$adm_id=$this->adm_id;
			$uni_logo=$this->uni_logo;
			$uni_full_name=$this->uni_full_name;
			$uni_short_name=$this->uni_short_name;
			$uni_slogan=$this->uni_slogan;
			$uni_rank=$this->uni_rank;
			$uni_isPrivate=$this->uni_isPrivate;
			$uni_status=$this->uni_status;
			$uni_addDate=$this->uni_addDate;
			$uni_description=$this->uni_description;
			$table=UNIVERSITY;

			$this->returnQuery("INSERT INTO $table (
					`uni_id`, `adm_id`, `uni_logo`, 
					`uni_full_name`, `uni_short_name`, 
					`uni_slogan`, `uni_rank`, `uni_isPrivate`, 
					`uni_status`, `uni_addDate`, 
					`uni_description`) 
				VALUES ('$uni_id', '$adm_id', '$uni_logo', '$uni_full_name', 
					'$uni_short_name', '$uni_slogan', '$uni_rank', 
					'$uni_isPrivate', '$uni_status', '$uni_addDate', '$uni_description');");	
		}
	}
}
$obj_university = new University();

?>