<?php
//error_reporting(E_ALL);




$show_id = 5;

$lead_id = $_GET['id'];

$lid = $_GET['lid'];

include ("fx.php");

if ($_GET['d'] == '1' && $_GET['lid']) {
	$lead_id = $_GET['lid'];
	$sql = "Delete from leads where lead_id = ". $lead_id;
	mysql_query($sql);
	
	//$sql = "";
	
	
	
	}



if ($_POST['action'] = "login")

	{ 
	
	if ($_POST['username'] == "admin" && $_POST['password'] == "demo"){
		
		$_SESSION['login'] = "true";	
		
		//echo $_SESSION['login'];
		
		}
		
	}
	
	
check_login();


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<link REL="SHORTCUT ICON" HREF="../images/favicon.ico">

<title>MRF Raffle Admin Panel</title>
	
	<link href="style.css" rel="stylesheet" media="all" />
	
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.js"></script>
	<script type="text/javascript" src="js/tooltip.js"></script>
	<script type="text/javascript" src="js/tablesorter.js"></script>
	<script type="text/javascript" src="js/tablesorter-pager.js"></script>
	<script type="text/javascript" src="js/cookie.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>    
    <link rel="stylesheet" type="text/css" href="../css/styles/light_blue/ui.css" />
    <link rel="stylesheet" type="text/css" href="../css/tables.css" />
    <link rel="stylesheet" type="text/css" href="../css/general.css" />
    
    

</head>

<body>
    <div id="container">
    
    	<div id="header">
        	<img src="images/loginlogo.jpg" alt="Logos" class="logo"/></a>
        </div>
        
        <div id="middle">
            <div id="content">
            	<!--<img src="/images/ipads.jpg" alt="iPads" class="prize"/>
                -->
            <div class="hastable">  
                                                
                <? echo get_user_selectlist($_SESSION['sid']); ?>
				
         	</div> <!-- end hastable -->
       </div> <!--closes middle-->
            
            <div id="footer">
        		<p class="fineprint">Powered by <?php echo $raffle; ?> <a href="http://www.audiencegeneration.com" target="_blank">Audience Generation</a></p>
        	</div>
        </div>
        
        
    
    </div> <!--closes container-->
    
    
    
</body>


<?	
	



  if ($_GET['r'] == "1" && $_GET['lid']) 
	
	{
	
	$lead_id = $_GET['lid'];
?>

<!--// <style>
.pop_up{
margin-left:180px;
margin-top:80px;
	
	}


	}
	
.pop_up table{
	width:300px;
	margin-left:40px;}	


.pop_up h1{ margin-left:5px;}


</style> //-->


<div id="welcome" title="Permanently Remove User">
<div id="main-content">
     <!--<div class="page-title ui-widget-content ui-corner-all">-->
<div class="other">
<div class="pop_up2">

<strong>

Are you certain you would like to <br>permanently remove this lead?
</strong>
	<table width="100%">
                       
                                              
                        <tr><td colspan="3" align="center">
 <div style="float:right;margin-right:55px;"><a href="?d=2&lid=<?=$lead_id?>" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-circle-check"></span>Yes</a>             
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?d=t&lid=x" class="btn ui-state-default ui-corner-all"><span class="ui-icon ui-icon-refresh"></span>Cancel</a>
                        </td>
                        </tr>
                       
                        </table>         
           
				</div></div></div>
<?	
	}
	
	

?>

</html>
