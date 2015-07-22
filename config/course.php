<?php
//include_once("class.php");
class Course extends main{
	function co_id($co_id){return $co_id;}
	function co_name($co_name){return $co_name;}
	function co_des($co_des){return $co_des;}
	function fee($fee){return $fee;}
	function co_requirement($co_requirement){return $co_requirement;
	function co_duration($co_duration){return $co_duration;}
	function co_startDate($co_startDate){return $co_startDate;}

	function co_endDate($co_endDate){return $co_endDate;
	function co_closeDate($co_closeDate){return $co_closeDate;}
	function co_tag($co_tag){return $co_tag;}
	
	function course_process($opt,$id=""){
		if($opt=="insert"){
			$co_id="";
			$co_name=$this->co_name;
			$co_des=$this->co_des;
			$fee=$this->fee;
			$co_requirement=$this->co_requirement;
			$co_duration=$this->co_duration;
			$co_startDate=$this->co_startDate;
			$co_endDate=$this->co_endDate;
			$co_closeDate=$this->co_closeDate;
			$co_tag=$this->co_tag;

			$table=COURSE;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_course=new Course();

?>