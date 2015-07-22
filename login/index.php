<?php
require_once '../config/class.php';
if(isset($_POST['login'])){
	$obj_login->login_admin($_POST['username'],$_POST['password']);	
}else{
// Clear ERROR SMS WHEN First Load Page
unset($_SESSION['ERROR_LOGIN']);	
}
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo WEB_DIR?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo WEB_DIR?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo WEB_DIR?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control" />
                    </div>          
                    <div class="form-group" style="color:red">
                        <?php if(isset($_SESSION['ERROR_LOGIN'])){?>
                        <div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Alert!</b> <?php echo $_SESSION['ERROR_LOGIN']; ?>
                        </div>
                        <?php }else{echo "&nbsp;";}?>
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="login" class="btn bg-blue-gradient btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="#" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo WEB_DIR?>js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo WEB_DIR?>js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>