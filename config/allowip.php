<?php
//include_once("class.php");
class allowip extends main{
	function id($id){return $id;}
	function ip($ip){return $ip;}
	function note($note){return $note;}
	function other($other){return $other;}

	function allowip_process($opt,$id=""){
		if($opt=="insert"){
			$id="";
			$ip=$this->ip;
			$note=$this->note;
			$other=$this->other;
			
			$table=ALLOWIP;
			$this->returnQuery("insert into $table values
			('','$ip','$note','$other')");	
		}
	}
}
$obj=new allowip();

?>