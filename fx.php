<?php
			 //error_reporting(E_ALL);
			
			$host = "localhost"; //database location
			$user = "keddleman"; //database username
			$pass = "Keith2010"; //database password
			$db_name = "MRF"; //database name
			
			//database connection
			$link = mysql_connect($host, $user, $pass);
			mysql_select_db($db_name);

session_start();

if (isset($_GET['sid'])){ 

$_SESSION['show_id'] = $_GET['sid'];

}else if (!$_SESSION['sid']){

$_SESSION['show_id'] = 5;

}

//    You'll need this before they actually get started ALTER TABLE Table_name AUTO_INCREMENT = 1;

### called by admins to edit user details


function get_user_responses($show_id){
		
			
			$html .= "<form name='myform2' class='pager-form' method='post' action='?msg=1'>";		
			$html .= "<div id='dropdown' style='margin-top:18px;float:left;'><select class='show_id' onchange=\"window.open(this.options[this.selectedIndex].value,'_self')\">";
				
					$sql = "Select * from shows";
					
					$result = mysql_query($sql);
					
					
				
					
					if (!isset($_GET['sid'])){
							$show_id = '5';
						}else{
							$show_id = $_GET['sid'];
						}	
					
					while ($row = mysql_fetch_array($result)){
																		
						$chosen="";
						
						if ($row['show_id'] == $show_id){$chosen = "selected";}
						
						$html .= "<option value='?sid=".$row['show_id']."' ".$chosen.">".$row['show_title']."</option>";
						
					}
					
					
					$html .= "</select>  &nbsp;";
					
					if ($show_id == 6){
					$html .= "<a href='?select=true' class='btn ui-state-default ui-corner-all' style='margin-bottom:8px;'> <span class='ui-icon ui-icon-circle-check'></span>Draw Winner</a>";	
					}
			
					if ($show_id == 6){
						$html .= "<a href='?select=results' class='btn ui-state-default ui-corner-all' style='margin-bottom:8px;'> <span class='ui-icon ui-icon-circle-check'></span>Survey Results</a>";	
					}
			
			$html .= "</div><div id='pager'> 
			
							<select class='pagesize'>
									
									<option value='10' selected>10 results</option>
									<option value='30'>30 results</option>
									<option value='20'>20 results</option>
									<option value='40'>40 results</option>
									<option value='30000000'>All results</option>
									
								</select>								
							<a href=\"admin/Tests/albert.php\" />Export</a>
							<a class='btn_no_text btn ui-state-default ui-corner-all last' title='Last Page' href='#'>
									<span class='ui-icon ui-icon-arrowthickstop-1-e'></span>
								</a>
							<a class='btn_no_text btn ui-state-default ui-corner-all next' title='Next Page' href='#'>
									<span class='ui-icon ui-icon-circle-arrow-e'></span>
								</a>
								<input type='text' class='pagedisplay'/>
								<a class='btn_no_text btn ui-state-default ui-corner-all prev' title='Previous Page' href='#'>
									<span class='ui-icon ui-icon-circle-arrow-w'></span>
								</a>
								
									<a class='btn_no_text btn ui-state-default ui-corner-all first' title='First Page' href='#'>
									<span class='ui-icon ui-icon-arrowthickstop-1-w'></span>
								</a>
								
								
				     ";
			
						$html .= "</div>";
						$html .= "<table id='sort-table'>";
						$html .= "<thead> ";
						$html .= "<tr>";
						$html .= "<th>Name</th>";
						$html .= "<th>Company</th> ";
						$html .= "<th>Choose the description that best represents your role</th>"; 
						$html .= "<th>Most important selection criteria when choosing a PBM</th>";
						$html .= "<th>What solutions does your current PBM offer?</th>";
						$html .= "</tr>"; 
						$html .= "</thead>"; 
						$html .= "<tbody>"; 


		$sql = "SELECT leads.lead_id, leads.first_name, leads.last_name, leads.company, responses.lead_id, responses.answer_id, responses.question_id, answers.answer_id, answers.answer from leads, responses, answers where leads.lead_id = responses.lead_id and answers.answer_id = responses.answer_id"; // order by lead_id desc";

		$result = mysql_query($sql);
		
		if (!$result) {
		
			$html.= 'class.pi_user - could not run query: '.$sql.'<br>error:'.mysql_error().'<br>';
			
		}else{
						
			
			while ($row = mysql_fetch_array($result)) {
            
			//$lead_id = $row['lead_id'];
			
			//   Working through the LOGIC HERE !!!!  
			
			
				if ($lead_id == $row['lead_id']){
					
					
					
					}else{
						
						$lead_id = $row['lead_id'];
						$first_name = stripslashes($row['first_name']);
						$last_name = stripslashes($row['last_name']);				
						$full_name = $first_name.' '.$last_name;	
						
						
					}
			
			
			
			
			//$email = shorten_text($row['email'],"25");	
			$company = stripslashes($row['company']);
							
			$html .= "<tr>";
			$html .= "<td valign='top'><a style='margin-left:10px;margin-top:6px;margin-bottom:6px;' class='btn_no_text btn ui-state-default ui-corner-all float-left tooltip' title='Delete Record' href='?r=1&lid=".$id."'>
									<span class='ui-icon ui-icon-circle-close'></span></td>";	
			$html .= "<td valign='top'>".$full_name."</td>";	
			$html .= "<td valign='top'>".$company."</td>";
			
			$html .= "<td valign='top'>".$email."</td>";
			
			if ($_GET['sid'] != 4){
				
			$html .= "<td valign='top'>".$phone."</td>";
			$html .= "<td valign='top'>".$company."</td>";
			
			$html .= "<td valign='top'>".$address."</td>";
			$html .= "<td valign='top'>".$city."</td>";
			$html .= "<td valign='top'>".$state."</td>";
			$html .= "<td valign='top'>".$zip."</td>";
			$html .= "<td valign='top'>".$create_date."</td>";
			
			if ($_GET['sid'] == 2){
			
			$html .= "<td valign='top'>".$opt_out."</td>";
			
			}else{
			
			//$html .= "<td valign='top'>".$screening."</td>";
			
			}
			
			$html .= "<td valign='top'>".$winner."</td>";
			//$html .= "<td valign='top'>".$id."</td>";
			
			
			} else {
				
				$html .= "<td colspan=9 valign='top'><span class='tooltip' title='".$comments."'>".shorten_text($comments,"50")."</span></td>";
				$html .= "<td valign='top'>".$create_date."</td>";
				
				}
						
			
			
			
			$html .= "</tr>";			
			
			}// end foreach client_list
			
		} // end if
		
		$html .= "</table>";
	
		
		return $html;
		
	} // end function get_client_list








	function get_user_selectlist($show_id){
		
			
			$html .= "<form name='myform2' class='pager-form' method='post' action='?msg=1'>";		
			$html .= "<div id='dropdown' style='margin-top:14px;float:left;'><select class='show_id' onchange=\"window.open(this.options[this.selectedIndex].value,'_self')\">";
				
					$sql = "Select * from shows";
					
					$result = mysql_query($sql);
					
					
				
					
					if (!isset($_GET['sid'])){
							$show_id = '5';
						}else{
							$show_id = $_GET['sid'];
						}	
					
					while ($row = mysql_fetch_array($result)){
																		
						$chosen="";
						
						if ($row['show_id'] == $show_id){$chosen = "selected";}
						
						$html .= "<option value='?sid=".$row['show_id']."' ".$chosen.">".$row['show_title']."</option>";
						
					}
					
					
					$html .= "</select>  &nbsp;";
					
					if ($show_id == 6){
					$html .= "<a href='?select=true' class='btn ui-state-default ui-corner-all' style='margin-bottom:8px;'> <span class='ui-icon ui-icon-circle-check'></span>Draw Winner</a>";	
					}
			
					if ($show_id == 6){
						$html .= "<a href='?select=results' class='btn ui-state-default ui-corner-all' style='margin-bottom:8px;'> <span class='ui-icon ui-icon-circle-check'></span>Survey Results</a>";	
					}
			
			$html .= "</div><div id='pager'> 
			
							<select class='pagesize'>
									
									<option value='10' selected>10 results</option>
									<option value='30'>30 results</option>
									<option value='20'>20 results</option>
									<option value='40'>40 results</option>
									<option value='30000000'>All results</option>
									
								</select>								
							<a class='btn_no_text btn ui-state-default ui-corner-all' title='Last Page' style='padding: 4px;' href=\"Tests/albert.php\" />Export</a>
							<a class='btn_no_text btn ui-state-default ui-corner-all last' title='Last Page' href='#'>
									<span class='ui-icon ui-icon-arrowthickstop-1-e'></span>
								</a>
							<a class='btn_no_text btn ui-state-default ui-corner-all next' title='Next Page' href='#'>
									<span class='ui-icon ui-icon-circle-arrow-e'></span>
								</a>
								<input type='text' class='pagedisplay'/>
								<a class='btn_no_text btn ui-state-default ui-corner-all prev' title='Previous Page' href='#'>
									<span class='ui-icon ui-icon-circle-arrow-w'></span>
								</a>
								
									<a class='btn_no_text btn ui-state-default ui-corner-all first' title='First Page' href='#'>
									<span class='ui-icon ui-icon-arrowthickstop-1-w'></span>
								</a>
								
								
				     ";
			
						$html .= "</div>";
						$html .= "<table id='sort-table'>";
						$html .= "<thead> ";
						$html .= "<tr>";
						 $html .= "<th>Remove</th>";
						$html .= "<th>Last</th> ";
						$html .= "<th>First</th>"; 
						$html .= "<th>Email</th>";
						
						if ($_GET['sid'] != 4){
						
						$html .= "<th>Phone</th>";
						$html .= "<th>Company</th>";
                    	$html .= "<th>Address</th>";
						$html .= "<th>City</th>"; 
						$html .= "<th>State</th>"; 
						$html .= "<th>Zip</th>";
						$html .= "<th>Created</th>";
						if ($_GET['sid'] == 2){
						$html .= "<th>Opt_Out</th>";  
						}else {
						//$html .= "<th>Screen</th>"; 
						}//$html .= "<th>".$_SESSION['sid']."</th>"; 
						$html .= "<th>Winner</th>"; 
						//$html .= "<th>ID#</th>";
						
						}else {
						
						
						$html .= "<th colspan='9'>Comments</th>";
						$html .= "<th>Date Entered</th>";
						
						}
						
						
					
						$html .= "</tr>"; 
						$html .= "</thead>"; 
						$html .= "<tbody>"; 


		$sql = "Select distinct lead_id as id, show_id, first_name, last_name, email, company, address, city, state, zip, phone, winner, create_date, screening, comments, opt_out from leads where show_id = ".$_SESSION['show_id']. " order by lead_id DESC, winner DESC"; // order by lead_id desc";

		$result = mysql_query($sql);
		
		if (!$result) {
		
			$html.= 'class.pi_user - could not run query: '.$sql.'<br>error:'.mysql_error().'<br>';
			
		}else{
			
			while ($row = mysql_fetch_array($result)) {
            
			$first_name = stripslashes($row['first_name']);
			$last_name = stripslashes($row['last_name']);				
			$full_name = $first_name.' '.$last_name;				
			$email = shorten_text($row['email'],"25");	
			
			
			$company = stripslashes($row['company']);
			$address = stripslashes($row['address']);
			$city = $row['city'];
			$state = $row['state'];
			$zip = $row['zip'];
			$phone = stripslashes($row['phone']);
			$winner = yesno($row['winner']);
			$create_date = get_date_for_web($row['create_date']);
			
			$screening = yesno($row['screening']);
			$opt_out = yesno($row['opt_out']);
			
			$user_show_id  = get_show_name($row['show_id']);
			$id = $row['id'];
			
			$comments = $row['comments'];
			
			
			$html .= "<tr>";
			$html .= "<td valign='top'><a style='margin-left:10px;margin-top:6px;margin-bottom:6px;' class='btn_no_text btn ui-state-default ui-corner-all float-left tooltip' title='Delete Record' href='?r=1&lid=".$id."'>
									<span class='ui-icon ui-icon-circle-close'></span></td>";	
			$html .= "<td valign='top'>".$last_name."</td>";	
			$html .= "<td valign='top'>".$first_name."</td>";
			
			$html .= "<td valign='top'>".$email."</td>";
			
			if ($_GET['sid'] != 4){
				
			$html .= "<td valign='top'>".$phone."</td>";
			$html .= "<td valign='top'>".$company."</td>";
			
			$html .= "<td valign='top'>".$address."</td>";
			$html .= "<td valign='top'>".$city."</td>";
			$html .= "<td valign='top'>".$state."</td>";
			$html .= "<td valign='top'>".$zip."</td>";
			$html .= "<td valign='top'>".$create_date."</td>";
			
			if ($_GET['sid'] == 2){
			
			$html .= "<td valign='top'>".$opt_out."</td>";
			
			}else{
			
			//$html .= "<td valign='top'>".$screening."</td>";
			
			}
			
			$html .= "<td valign='top'>".$winner."</td>";
			//$html .= "<td valign='top'>".$id."</td>";
			
			
			} else {
				
				$html .= "<td colspan=9 valign='top'><span class='tooltip' title='".$comments."'>".shorten_text($comments,"50")."</span></td>";
				$html .= "<td valign='top'>".$create_date."</td>";
				
				}
						
			
			
			
			$html .= "</tr>";			
			
			}// end foreach client_list
			
		} // end if
		
		$html .= "</table>";
	
		
		return $html;
		
	} // end function get_client_list
### used to convert db date values into MM/DD/YYYY
	function get_date_for_web($dateval){
		
		if ($dateval==NULL)
			return ""; // otherwise null dates show up on web as 12/31/1969
		else	
			return date('m/d/Y - h:m:s',strtotime($dateval));
			
	} // end function get_date_for_db


function get_show_name($show_id){
	$sql = "Select show_title from shows where show_id = ".$show_id;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	 
	 $name = $row['show_title'];
	 
	return $name; 
	}



/*function instant_alerts($email, $lead_id){
	
	$email_body = " ";
	
	}
*/

function yesno($bool){
	if($bool == 1){ return "Yes";}
	if($bool == 0) { return "No";}	
	}

### this function allows us to can easily change email from / send method site-wide
	
function send_welcome_email($email_to){
		
		$from_name = "CVS Caremark"; //senders name 
		$from_email = "no-reply@cvscaremarktradeshows.com"; //senders e-mail adress 	
		$header = "From: ". $from_name . " <" . $from_email . ">\r\n"; //optional headerfields 
		
		$email_subject = "Stay Informed on the Latest CVS Caremark Innovations";
		
		$email_body = "Thank you for visiting the CVS Caremark booth at AHIP’s Institute 2012.\r\r  
We invite you to learn more about our innovations by visiting CVSCaremarkfyi.com. There, you can review the current edition of CVS Caremark Insights 2012, our ongoing research on adherence and other ways we are reinventing pharmacy. Based on years of clinical and behavioral research, we have developed innovative programs that help our customers and members improve their adherence.  In 2011, the results of these programs increased optimal adherence rates for our clients, resulting in nearly $2.4 billion in overall health care savings across our book of business.\r\r 
If you’d like to discuss how our innovative programs can benefit your plan, please contact Daryl Newman at daryl.newman@caremark.com.\r\r 
http://viewer.zmags.com/publication/dde38afc#/dde38afc/1\r\r 
This e-mail contains promotional messaging. CVS Caremark is sensitive to the number of e-mails you receive each day. Please let us know if you would like to opt out of future e-mails from CVS Caremark.\r\r 
To OPT OUT of e-mails from CVS Caremark, e-mail: cvscaremarkbrandevents@caremark.com";


		//$email_body .= "Please let us know if you would like to opt out of future e-mails about our Hemophilia Care Program and related special offers.\r\rTo OPT OUT of e-mails from CVS Caremark Specialty Pharmacy email: mailto:cari.galivan@caremark.com\r\r";
		
		
		//$email_body = wordwrap($email_body,75,"\r",false);
		
		
	mail($email_to, $email_subject, $email_body, $header); 
	
	}
	

function send_screening_alert($email_to, $lead_id){
		
		$from_name = "CVS Caremark"; //senders name 
		$from_email = "no-reply@cvscaremarktradeshows.com"; //senders e-mail adress 	
		$header = "From: ". $from_name . " <" . $from_email . ">";  // \r\n"; //optional headerfields 
		
		$email_subject = " Screening Alert ";
		
		$email_body = " Screening Alert: ID# ". $lead_id;
		
	mail($email_to, $email_subject, $email_body, $header); 
	
	}


function shorten_text($text,$len) {

        // Change to the number of characters you want to display

        $chars = $len;


		if (strlen($text) >= $chars){
	
    		$text = substr($text,0,$chars);
			$text = substr($text,0,strrpos($text,'@'));
			$text = $text."...";
		}


        return $text;

    }
	
function check_login(){
		
		if ($_SESSION['login'] != 'true') {
			
			header ("Location: login.php");
	
	}
}
	
?>
