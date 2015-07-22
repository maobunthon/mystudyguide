<?php
//include_once("class.php");
class QualificationLevel extends main{
	function qu_id($qu_id){return $qu_id;}
	function qu_name($qu_name){return $qu_name;}
	function qu_status($qu_status){return $qu_status;}
	
	function qualification_level_process($opt,$id=""){
		if($opt=="insert"){
			$qu_id="";
			$qu_name=$this->qu_name;
			$qu_status=$this->qu_status;
			
			$table=QUALIFICATION_LEVEL;
			$this->returnQuery("insert into $table ");
		}
	}
}
$obj_qualificationLevel=new QualificationLevel();

?>