<?php
//include_once("class.php");
class EventTraining extends main{
	function et_id($et_id){return $et_id;}
	function qu_id($qu_id){return $qu_id;}
	function cat_id($cat_id){return $cat_id;}
	function cont_id($cont_id){return $cont_id;}
	function et_title($et_title){return $et_title;}
	function et_publishDate($et_publishDate){return $et_publishDate;}
	function et_des($et_des){return $et_des;}
	function et_eventProvider($et_eventProvider){return $et_eventProvider;}
	function et_address($et_address){return $et_address;}
	function et_startDate($et_startDate){return $et_startDate;}

	function et_endDate($et_endDate){return $et_endDate;}
	function et_tag($et_tag){return $et_tag;}
	function et_isDelete($et_isDelete){return $et_isDelete;}
	function et_deleteDate($et_deleteDate){return $et_deleteDate;}

	function event_training_process($opt,$id=""){
		if($opt=="insert"){
			$et_id="";
			$qu_id=$this->qu_id;
			$cat_id=$this->cat_id;
			$cont_id=$this->cont_id;
			$et_title=$this->et_title;
			$et_publishDate=$this->et_publishDate;
			$et_des=$this->et_des;
			$et_eventProvider=$this->et_eventProvider;

			$et_address=$this->et_address;
			$et_startDate=$this->et_startDate;
			$et_endDate=$this->et_endDate;
			$et_tag=$this->et_tag;
			$et_isDelete=$this->et_isDelete;
			$et_des=$this->et_des;
			
			
			$table=EVENT_TRAINING;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_event_training=new EventTraining();

?>