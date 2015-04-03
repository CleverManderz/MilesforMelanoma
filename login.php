<?php include("../fx.php")?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link REL="SHORTCUT ICON" HREF="../images/favicon.ico">
<title>Miles for Melanoma Login</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="../js/superfish.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.js"></script>
	<script type="text/javascript" src="../js/tooltip.js"></script>
	<script type="text/javascript" src="../js/tablesorter.js"></script>
	<script type="text/javascript" src="../js/tablesorter-pager.js"></script>
	<script type="text/javascript" src="../js/cookie.js"></script>
	<script type="text/javascript" src="../js/custom.js"></script>

<style>
body{
	font-family: Helvetica;
	background: url(images/bkg.jpg)no-repeat;
	-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
label{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
}
.pop_up{

width: 600px;
margin: 0px auto;
background: #fff;
-webkit-box-shadow: 0px 0px 27px rgba(50, 50, 50, 1);
-moz-box-shadow:    0px 0px 27px rgba(50, 50, 50, 1);
box-shadow:         0px 0px 27px rgba(50, 50, 50, 1);
margin-top:20px;

	
	}
.header{
	padding: 20px;
}
#username, #password {
	background-color: #fff;
border: 1px solid #bdbdbd;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
-webkit-transition: border linear .2s, box-shadow linear .2s;
-moz-transition: border linear .2s, box-shadow linear .2s;
-o-transition: border linear .2s, box-shadow linear .2s;
transition: border linear .2s, box-shadow linear .2s -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
font-size: 16px;
padding: 5px;
margin-bottom: 10px;	
	
	}
.forms{
	padding: 30px 0 10px 130px;
	background: #037fab; /* IE6-9 */

}
input.login, select.full, textarea.full {
width:70%;
	
.pop_up table{
	width:600px;
	margin-left:40px;}	
.pop_up h1{ margin-left:5px;font-size:14px;}
.desc{
	color: #000;
}
#submit{
	float:left;
	margin-top:10px;
}

</style>

<div id="welcome_log" title="login">
<div id="main-content">
<!--<div class="page-title ui-widget-content ui-corner-all">-->
<!--<div class="other">-->
<div class="pop_up">
<div class="header" style="margin: 0px;"><img src="images/loginlogo.jpg"></div>


        <FORM action="http://www.racingtogive.com/admin/main_index.php" method="post" class="forms" name="form" >

			<input name="action" type="hidden" value="login" />
                   <!-- <input name="login_type" type="hidden" value="user" />
			<ul>
				<li>-->
					
                    <label for="email" class="desc">
                                         
                    
						Username:
					</label>
					<div>
						<input type="text" tabindex="1" maxlength="255" class="field text login" name="username" id="username" size="30" />
					</div>
				<!--</li>
				<li>-->
					<label for="password" class="desc">
						Password:
					</label>

					<div>
						<input type="password" size="30" tabindex="1" maxlength="255" value="" class="field text login" name="password" id="password" />
					</div>
                    
                    <div id="submit"><input type="submit" value="Login" style="background: #399d64;
background: -moz-linear-gradient(top, #399d64 0%, #048845 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#399d64), color-stop(100%,#048845));
background: -webkit-linear-gradient(top, #399d64 0%,#048845 100%);
background: -o-linear-gradient(top, #399d64 0%,#048845 100%);
background: -ms-linear-gradient(top, #399d64 0%,#048845 100%);
background: linear-gradient(to bottom, #399d64 0%,#048845 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#399d64', endColorstr='#048845',GradientType=0 );
text-decoration: none;
border:1px solid #39b16d;
color: #fff; -webkit-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 0px 5px rgba(50, 50, 50, 0.75);
box-shadow:         0px 0px 5px rgba(50, 50, 50, 0.75);
padding: 3px 15px 5px 15px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;margin-top:10px;font-weight:bold;
font-size: 16px;"/></div>
                <br />
               <br />
                    
               
                    <!--<font style="font-size: 9px;"><a href="password.php">Retrieve Password</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../user_register.php?action=new">Create Account</a></font>
                    -->
				<!--</li>
			</ul>-->
		</form>
	</div>
</body>
</html>
