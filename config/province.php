<?php
//include_once("class.php");
class Province extends main{
	function pro_id($pro_id){return $pro_id;}
	function pro_name($pro_name){return $pro_name;}
	function pro_status($pro_status){return $pro_status;}
	function pro_addDate($pro_addDate){return $pro_addDate;}

	function pro_isDelete($pro_isDelete){return $pro_isDelete;}
	function pro_deleteDate($pro_deleteDate){return $pro_deleteDate;}
	function note($note){return $note;}
	
	function province_process($opt,$id=""){
		if($opt=="insert"){
			$id="";
			$name=$this->name;
			$status=$this->status;
			$addDate=$this->addDate;
			$note=$this->note;
			
			$table=PROVINCE;
			$this->returnQuery("insert into $table");	
		}
	}
}
$obj_province=new Province();

?>