<?php
//include_once("class.php");
class Branch extends main{
	function br_id($b_id){return $br_id;}
	function uni_id($uni_id){return $uni_id;}
	function pro_id($pro_id){return $pro_id;}
	function uni_type_id($uni_type_id){return $uni_type_id;}
	function br_name($br_name){return $br_name;}
	function br_isHeadOffice($br_isHeadOffice){return $br_isHeadOffice;}
	function br_isFeature($br_isFeature){return $br_isFeature;}

	function br_address($br_address){return $br_address;}
	function br_google_map($br_google_map){return $br_google_map;}
	function br_phone($br_phone){return $br_phone;}
	function br_email($br_email){return $br_email;}
	function br_fax($br_fax){return $br_fax;}
	function br_website($br_website){return $br_website;}
	function br_facebook($br_facebook){return $br_facebook;}

	function br_status($br_status){return $br_status;}
	function br_addBy($br_addBy){return $br_addBy;}
	function br_addDate($br_addDate){return $br_addDate;}
	function br_delete($br_delete){return $br_delete;}
	function br_deleteDate($br_deleteDate){return $br_deleteDate;}
	function note($note){return $note;}

	function branch_process($opt,$id=""){
		if($opt=="insert"){
			$br_id=$this->b_id;
			$uni_id=$this->uni_id;
			$pro_id=$this->pro_id;
			$uni_type_id=$this->uni_type_id;
			$br_name=$this->br_name;
			$br_isHeadOffice=$this->br_isHeadOffice;
			$br_isFeature=$this->br_isFeature;

			$br_address=$this->br_address;
			$br_google_map=$this->br_google_map;
			$br_phone=$this->br_phone;
			$br_email=$this->br_email;
			$br_fax=$this->br_fax;
			$br_website=$this->br_website;
			$br_facebook=$this->br_facebook;

			$br_status=$this->br_status;
			$br_addBy=$this->br_addBy;
			$br_addDate=$this->br_addDate;
			$br_delete=$this->br_delete;
			$br_deleteDate=$this->br_deleteDate;
			$note=$this->note;
			$table=BRANCH;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_branch=new Branch();

?>