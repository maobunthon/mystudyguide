<?php
define("MYIP","192.168.1.5");
define("WEB_DIR","http://localhost:81/mystudyguide-project/");
define("WEB_HOME","http://localhost:81/mystudyguide-project/");
define("HOST","localhost");
define("USER_NAME","root");
define("PASSWORD","");
define("DATABASE_NAME","mystudyguide_db");

define("ADMIN","admin");
define("ADMIN_USER","adm_user");
define("UNIVERSITY","university");
define("BRANCH","branch");
define("PROVINCE","province");
define("COURSE_DETAIL","course_detail");
define("SCHOLARSHIP","scholarship");
define("EVENT_TRAINING","event_training");
define("UNI_COURSE_LEVEL","uni_course_level");

if(isset($_SESSION['lgr'])!=""){
	define("USER_ID",$_SESSION['lgr']);
}
define("QUERY_EVENT_TRAINING_ADMIN",EVENT_TRAINING." et ");
define("QUERY_BRANCH_ADMIN",BRANCH." b ");
define("QUERY_USER_ADMIN",ADMIN_USER." au ");
define("QUERY_COURSE_DETAIL_ADMIN",COURSE_DETAIL." cd ");
define("QUERY_SCHOLARSHIP_ADMIN",SCHOLARSHIP." s ");
//define("QUERY_UNIVERSITY_ADMIN",UNIVERSITY." u order by u.uni_id desc");
?>
