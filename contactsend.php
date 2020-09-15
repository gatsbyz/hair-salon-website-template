<?php
	
	$ContactFullName = $_REQUEST['ContactFullName'];
	$ContactEmail = $_REQUEST['ContactEmail'];
	$ContactNumber = $_REQUEST['ContactNumber'];
	$ContactCompanyName = $_REQUEST['ContactCompanyName'];
	$ContactDescription = nl2br($_REQUEST['ContactDescription']);	
	$headers= "MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\n";
 	$headers.= "From: $ContactFullName <$ContactEmail>"; //FROM Email Address & Name
	$subject = "Contact From $ContactFullName"; // Email Subject Line
	$toemail = "name@domain.com"; // to Email Address
	
	$mailbody = "<table width='600' border='0' cellpadding='3' cellspacing='3'>
				  <tr>
					<td colspan='2' align='left'><font face='Arial, Helvetica, sans-serif' size='4'><strong>Appointment request from  $ContactFullName</strong></font></td>
				  </tr>
				  <tr>
					<td colspan='2' align='center'><table width='600' cellpadding='3' cellspacing='3' border='0'>
						<tr>
						  <td><table width='100%' cellspacing='0' cellpadding='12' border='1' bordercolor='#919191'>
							  <tr>
								<td width='32%' align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Name :</font></td>
								<td width='68%' align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$ContactFullName</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Email :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$ContactEmail</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Contact  :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$ContactNumber</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Company Name  :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$ContactCompanyName</font></td>
							  </tr>
							  <tr>
								<td align='right' valign='top'><font face='Arial, Helvetica, sans-serif' size='4'>Description :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$ContactDescription</font></td>
								</tr>
							  </table></td>
						</tr>
					  </table></td>
				  </tr>
				</table>";
	
	$sendmail = mail($toemail,$subject,$mailbody,$headers);
	if($sendmail)
	{
		echo '1';
		exit;
	}
	else
	{
		echo '2';
		exit;
	}
?>