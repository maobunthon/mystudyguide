<?php
define("TITLE","Login to system");
include("../config/class.php");
//echo $_SESSION['lgr'];
if(isset($_POST['login'])){
	$obj_login->login_admin($_POST['username'],$_POST['password']);	
}else{
// Clear ERROR SMS WHEN First Load Page
unset($_SESSION['ERROR_LOGIN']);	
}
?>
<?php include("../include/header.php");?>


<div id="login-box">
<div id="header">Login to system</div>
<form action="?" method="post">
<table width="90%">
    <tr>
    	<td style="color:#FF0000;"><?php if(isset($_SESSION['ERROR_LOGIN'])){echo $_SESSION['ERROR_LOGIN'];}else{echo "&nbsp;";}?></td>
    </tr>
    <tr>
    	<td><input placeholder="Username" name="username" type="text" /></td>
    </tr>
    <tr>
    	<td><input placeholder="Password" name="password" type="password" /></td>
    </tr>
    <tr>
    	<td align="center"><input name="login" type="submit" value="Login" /></td>
    </tr>
</table>
</form>
</div>
