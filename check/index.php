<?php
//echo "abc: ".$_SESSION['lgr'];
if($_SESSION['lgr']==""){
	/*echo "<script>window.location.href='".WEB_DIR."login/';</script>";*/
	header("location: ".WEB_DIR."login/");
}
?>