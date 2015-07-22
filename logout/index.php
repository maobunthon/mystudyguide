<?php
include("../config/class.php");
session_destroy();
/*echo "<script>window.location.href='../"."';</script>";*/
header("location: ".WEB_DIR);
?>