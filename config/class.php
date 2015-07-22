<?php
session_start();
include("define.php");
date_default_timezone_set("Asia/Bangkok");

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
class main{
	public $connection;
	function main(){
		$this->conn();
	}
	// connection declearation
	function conn(){
		$this->connection=mysqli_connect(HOST,USER_NAME,PASSWORD) or die ("can't not connect to server");
		$db=mysqli_select_db($this->connection,DATABASE_NAME) or die ("can't not connect to database");
	}
	//-- function to encript ID
	function encryptID($str){
		return md5($str).".".$str*3423453;	
	}
	//-- function to decript ID
	function decryptID($str){
		return (substr($str,strpos($str,".")+1))/3423453;
	}
	//******************* to return how result from mysql_query***********
	function returnQuery($str){
		$sql=mysqli_query($this->connection,$str);
		if(!empty($sql)){
			return $sql;
		}
	}
	// Upload
	function uploadImg(){
			
	}
	// format date
	function myDate($dateTimeString,$format='d-m-Y'){
		//Y-m-d H:i:s
		$datetime = new DateTime($dateTimeString);
		echo $datetime->format($format);	
	}
	function pagination($query,$per_page=10,$page=1,$url='?'){  
		
		$query = "SELECT COUNT(*) as `num` FROM {$query}";
		$row = mysqli_fetch_array(mysqli_query($this->connection,$query));
		$total = $row['num'];
		$adjacents = "2";
		  
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$lastlabel = "Last &rsaquo;&rsaquo;";
		  
		$page = ($page == 0 ? 1 : $page); 
		$start = ($page - 1) * $per_page;                              
		  
		$prev = $page - 1;                         
		$next = $page + 1;
		  
		$lastpage = ceil($total/$per_page);
		  
		$lpm1 = $lastpage - 1; // //last page minus 1
		  
		$pagination = "";
		if($lastpage > 1){  
			$pagination .= "<ul class='pagination'>";
			$pagination .= "<li class='page_info' style='line-height:35px;margin-left:10px;'> Page {$page} of {$lastpage}</li>";
				  
				if ($page > 1) $pagination.= "<li><a href='{$url}page={$prev}'>{$prevlabel}</a></li>";
				  
			if ($lastpage < 7 + ($adjacents * 2)){  
				for ($counter = 1; $counter <= $lastpage; $counter++){
					if ($counter == $page)
						$pagination.= "<li class='active'><a class='current'>{$counter}</a></li>";
					else
						$pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                   
				}
			  
			} elseif($lastpage > 5 + ($adjacents * 2)){
				  
				if($page < 1 + ($adjacents * 2)) {
					  
					for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
						if ($counter == $page)
							$pagination.= "<li class='active'><a class='current'>{$counter}</a></li>";
						else
							$pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                   
					}
					$pagination.= "<li class='dot'><a>&hellip;</a></li>";
					$pagination.= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
					$pagination.= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>"; 
						  
				} elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
					  
					$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
					$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
					$pagination.= "<li class='dot'><a>&hellip;</a></li>";
					for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
						if ($counter == $page)
							$pagination.= "<li class='active'><a class='current'>{$counter}</a></li>";
						else
							$pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                   
					}
					$pagination.= "<li class='dot'><a>&hellip;</a></li>";
					$pagination.= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
					$pagination.= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>";     
					  
				} else {
					  
					$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
					$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
					$pagination.= "<li class='dot'><a>&hellip;</a></li>";
					for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
						if ($counter == $page)
							$pagination.= "<li class='active'><a class='current'>{$counter}</a></li>";
						else
							$pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                   
					}
				}
			}
			  
				if ($page < $counter - 1) {
					$pagination.= "<li><a href='{$url}page={$next}'>{$nextlabel}</a></li>";
					$pagination.= "<li><a href='{$url}page=$lastpage'>{$lastlabel}</a></li>";
				}
			  
			$pagination.= "</ul>"; 
		}
		return $pagination;
	}
	
}
$obj_main=new main();
class login extends main{
	function login_admin($username,$password){
		$username=strip_tags($username);
		$password=md5($password);
		$table=ADMIN;
		$ip=$this->returnQuery("select ip from allowip where ip='".MYIP."'");
		if(mysqli_num_rows($ip)>=1){
			$lg=$this->returnQuery("select * from $table where adm_userName='$username' and adm_password='$password' and adm_status='1'");
			if(mysqli_num_rows($lg)>=1){
				// Fetch Array To $row
				$row=mysqli_fetch_array($lg);
				// Assign Value to Session
				$_SESSION['ERROR_LOGIN']="";
				$_SESSION['lgr']=$row['id'];
				$_SESSION['uimg']=$row['adm_photo'];
				$_SESSION['uname']=$row['adm_fullName'];
				$_SESSION['addDate']=$row['adm_addDate'];
				
				/*echo "<script>window.location.href='".WEB_DIR."';</script>";*/
				header("location: ".WEB_DIR);
			}else{
				$_SESSION['ERROR_LOGIN']="Invalid username or password!";
				/*echo "<script>window.location.href='".WEB_DIR."login/';</script>";	*/
			}	
		}else{
			$_SESSION['ERROR_LOGIN']="Your IP is not allow!";
			/*echo "<script>window.location.href='".WEB_DIR."login/';</script>";	*/
		}
	}
}
$obj_login=new login();

?>