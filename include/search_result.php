<?php
error_reporting(0);
include('../config/class.php');
$check=$_GET['type'];
switch($check){
	case 'UNIVERSITY':
		include('search_university.php');
		break;
// END OF UNIVERSITY SEARCH RESULT  		
	case 'ADMIN_USER':
		include('search_user.php');
		break;
	case 'COURSE_DETAIL':
		include('search_course.php');
		break;
	case 'SCHOLARSHIP':
		include('search_scholarship.php');
		break;
	case 'EVENT_TRAINING':
		include('search_event_training.php');
		break;
}
?>