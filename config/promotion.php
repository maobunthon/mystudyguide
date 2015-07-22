<?php
//include_once("class.php");
class Promotion extends main{
	function promo_id($promo_id){return $promo_id;}
	function br_id($br_id){return $br_id;}
	function promo_name($promo_name){return $promo_name;}
	function promo_image($promo_image){return $promo_image;}
	function promo_des($promo_des){return $promo_des;}
	function promo_status($promo_status){return $promo_status;}
	function promo_addDate($promo_addDate){return $promo_addDate;}
	function promo_expiredDate($promo_expiredDate){return $promo_expiredDate;}

	function promo_isDelete($promo_isDelete){return $promo_isDelete;}
	function promo_deleteDate($promo_deleteDate){return $promo_deleteDate;}

	function promotion_process($opt,$id=""){
		if($opt=="insert"){
			$br_id=$this->br_id;
			$promo_name=$this->promo_name;
			$promo_title=$this->promo_title;
			$promo_image=$this->promo_image;
			$promo_des=$this->promo_des;
			$promo_status=$this->promo_status;
			$promo_addDate=$this->promo_addDate;
			$promo_expiredDate=$this->promo_expiredDate;
			
			$table=PROMOTION;
			$this->returnQuery("insert into $table");
		}
	}
}
$obj_promotion=new Promotion();


?>