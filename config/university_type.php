<?php
//include_once("class.php");
class UniverSchoolType extends main{
	function us_type_id($us_type_id){return $us_type_id;}
	function us_type($us_type){return $us_type;}

	function university_school_process($opt,$id=""){
		if($opt=="insert"){
			$us_type_id="";
			$us_type=$this->us_type;
			
			$table=UNIVERSITY_SCHOOL_TYPE;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_university_school_type = new UniverSchoolType();

?>