<?php
//include_once("class.php");
class Scholarship extends main{
	function sl_id($sl_id){return $sl_id;}
	function br_id($br_id){return $br_id;}
	function qu_id($qu_id){return $qu_id;}
	function cat_id($cat_id){return $cat_id;}
	function cont_id($cont_id){return $cont_id;}
	function sl_title($sl_title){return $sl_title;}

	function sl_expiredDate($sl_expiredDate){return $sl_expiredDate;}
	function sl_des($sl_addDate){return $sl_des;}
	function sl_status($sl_status){return $sl_status;}
	function sl_note($sl_note){return $sl_note;}

	function sl_studyIn($sl_studyIn){return $sl_studyIn;}
	function sl_sponsor($sl_sponsor){return $sl_sponsor;}
	function sl_requirement($sl_requirement){return $sl_requirement;}

	function sl_duration($sl_duration){return $sl_duration;}
	function sl_addDate($sl_addDate){return $sl_addDate;}
	function sl_startDate($sl_startDate){return $sl_startDate;}
	function sl_tag($sl_tag){return $sl_tag;}
	function sl_isDelete($sl_isDelete){return $sl_isDelete;}
	function sl_deleteDate($sl_deleteDate){return $sl_deleteDate;}

	function scholarship_process($opt,$id=""){
		if($opt=="insert"){
			$sl_id=$this->br_id;
			$br_id=$this->br_id;
			$qu_id=$this->qu_id;
			$cat_id=$this->cat_id;
			$cont_id=$this->cont_id;
			$sl_title=$this->sl_title;
			
			$sl_expiredDate=$this->sl_expiredDate;
			$sl_des=$this->sl_des;
			$sl_status=$this->sl_status;
			$sl_note=$this->sl_note;
			
			$sl_studyIn=$this->sl_studyIn;
			$sl_sponsor=$this->sl_sponsor;
			$sl_requirement=$this->sl_requirement;
			
			$sl_duration=$this->sl_duration;
			$sl_addDate=$this->sl_addDate;
			$sl_startDate=$this->sl_startDate;
			$sl_tag=$this->sl_tag;
			$sl_isDelete=$this->sl_isDelete;
			$sl_deleteDate=$this->sl_deleteDate;
			
			$table=SCHOLARSHIP;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_scholarship=new Scholarship();


?>