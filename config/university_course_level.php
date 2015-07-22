<?php
//include_once("class.php");
class UniversityCourseLevel extends main{
	function ucl_id($ucl_id){return $ucl_id;}
	function br_id($br_id){return $br_id;}
	function co_id($co_id){return $co_id;}
	function qu_id($qu_id){return $qu_id;}

	function university_course_level_process($opt,$id=""){
		if($opt=="insert"){
			$ucl_id="";
			$br_id=$this->br_id;
			$co_id=$this->co_id;
			$co_id=$this->co_id;

			$table=UNIVERSITY_COURSE_LEVEL;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_university_course_level=new UniversityCourseLevel();

?>