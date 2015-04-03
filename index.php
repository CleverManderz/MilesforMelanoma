<?php
//error_reporting(SHOW_ALL);

$show_id = 5;
$lead_id = $_GET['id'];

include ("../fx.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Melanoma Research Foundation - Newton Shoes Raffle</title>

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width,initial-scale=1">				
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles/style-mrf.css" media="screen" />
<link rel="stylesheet" href="styles/mediaqueries.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

 
<script type="text/javascript">

function checkFields() {
missinginfo = "";
if (document.form.first_name.value == "") {
missinginfo += "\n     -  First Name";
}

if (document.form.last_name.value == "") {
missinginfo += "\n     -  Last Name";
}
if (document.form.email.value == "") {
missinginfo += "\n     -  Email";
}
if (document.form.phone.value == "") {
missinginfo += "\n     -  Phone";
}



/*if ((document.form.email.value == "") || 
(document.form.email.value.indexOf('@') == -1) || 
(document.form.email.value.indexOf('.') == -1)) {
missinginfo += "\n     -  Invalid Email Address";
}*/
if (missinginfo != "") {
missinginfo ="_____________________________\n" +
"You failed to correctly fill in your:\n" +
missinginfo + "\n_____________________________" +
"\nPlease re-enter and submit again!";
alert(missinginfo);
return false;
}
else return true;
}

</script>

</head>
<body>
<div class="wrapper">
<div id="header-wrapper">
				<header class="container" id="site-header">
					
							<div id="logo">
								
						
					</div>
				</header>
			</div>
			<div class="head-container">
 <h2 class="headline">Sign up to learn more about the team and win a pair of Newton shoes!</h2></div>

<div id="wrap"> 
  <!-- wrapper -->
   <div id="container"> 
  
    <!-- page container -->
   
    
    <img src="images/newtonshoes.png" class="shoes">  
              
           </div>
          <div style="clear:both"></div>
          <div id="sidebar"> 
    <!-- the  sidebar --> 
    <!-- logo --> 
     
    <!-- navigation menu -->
        
    <form action="insert.php" method="post" name="form" id="form"> 
    <div class="form_description">
			<h1>Fill out the form below to sign up!</h1>
			
		</div>		
										<!-- //  Hidden variables for each show // -->
										<input type="hidden" name="show_id" value="<?=$show_id?>">
										
										
                                        
											<table cellpadding="0" cellspacing="0" style="margin-left: 20px;">
												<tr>
													<td class="label">First Name:<br />
														<input type="text" name="first_name" size="22" class="short-input" /></td>
													</tr>
													<tr>
													<td class="label">Last Name:<br />
														<input type="text" name="last_name" size="22" class="short-input" /></td>

													</tr>
																									<tr>
													<td class="label">Email:<br />
														<input type="text" name="email" size="22" class="short-input" /></td>
												</tr>
												<tr>
													<td colspan="2" class="label">Phone:<br />
														<input type="text" name="phone" size="22" class="short-input" /></td>
												</tr>
                                                		<tr>
<td colspan="2" class="label"><input class="checkbox" type="checkbox" name="moreinfo" value="yes"><label class="choice">I would like more information about melanoma and the Melanoma Research Foundation.</label></td></tr>

<tr><td colspan="2" class="label"><input id="checkbox" class="checkbox" type="checkbox" name="pdf" value="yes"><label class="choice">I would like to receive information about joining and racing for the Melanoma Research Foundation triathlon team.</label></td></tr>

                                              		<tr>
													
													<td colspan="2"><input type="submit" width="200px" name="submit" value="Register" class="submit" onClick="return checkFields();" />
													</td>
												</tr>
											</table>
										</form>

    
    
                 
</div>

          
          <footer class="footer">
      <p> &copy; 2013 <a href="http://www.melanoma.org/get-involved/miles-for-melanoma" target="_blank">Miles for Melanoma</a> | Powered by <a href="http://www.audiencegeneration.com" target="_blank">Audience Generation</a></p>
          </footer>  


</div></div>

</body>
</html>
