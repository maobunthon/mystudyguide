<?php
//include_once("class.php");
class Country extends main{
	function cont_id($cont_id){return $cont_id;}
	function cont_zipCode($cont_zipCode){return $cont_zipCode;}
	function cont_name($cont_name){return $cont_name;}
	function cont_status($cont_status){return $cont_status;}
	function cont_addDate($cont_addDate){return $cont_addDate;
	
	function country_process($opt,$id=""){
		if($opt=="insert"){
			$cont_id="";
			$cont_zipCode=$this->cont_zipCode;
			$cont_name=$this->cont_name;
			$cont_status=$this->cont_status;
			$cont_addDate=$this->cont_addDate;

			$table=COUNTRY;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_country = new Country();

?>