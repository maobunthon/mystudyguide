<?php
//include_once("class.php");
class Category extends main{
	function cat_id($cat_id){return $cat_id;}
	function cat_name($cat_name){return $cat_name;}
	function cat_status($cat_status){return $cat_status;}
	function cat_addDate($cat_addDate){return $cat_addDate;}
	function cat_isDelete($cat_isDelete){return $cat_isDelete;
	function cat_deleteDate($cat_deleteDate){return $cat_deleteDate;
	
	function country_process($opt,$id=""){
		if($opt=="insert"){
			$cat_id="";
			$cat_id=$this->cat_id;
			$cat_status=$this->cat_status;
			$cat_addDate=$this->cat_addDate;
			$cat_isDelete=$this->cat_isDelete;
			$cat_deleteDate=$this->cat_deleteDate;

			$table=CATEGORY;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_category = new Category();

?>