<?php
//include_once("class.php");
class Gallery extends main{
	function ga_id($ga_id){return $ga_id;}
	function br_id($br_id){return $br_id;}
	function ga_title($ga_title){return $ga_title;}
	function ga_name($ga_name){return $ga_name;}
	function ga_des($ga_des){return $ga_des;}
	function ga_status($ga_status){return $ga_status;}

	function ga_isDelete($ga_isDelete){return $ga_isDelete;}
	function ga_deleteDate($ga_deleteDate){return $ga_deleteDate;}

	function gallery_process($opt,$id=""){
		if($opt=="insert"){
			$ga_id="";
			$br_id=$this->br_id;
			$ga_title=$this->ga_title;
			$ga_name=$this->ga_name;
			$ga_des=$this->ga_des;
			$ga_status=$this->ga_status;
			$ga_isDelete=$this->ga_isDelete;
			$ga_deleteDate=$this->ga_deleteDate;

			$table=GALLERY;
			$this->returnQuery("insert into $table");	
		}
	}
}
$obj_gallery=new Gallery();
?>