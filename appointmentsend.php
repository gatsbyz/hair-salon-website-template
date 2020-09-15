<?php
	
	$AppointmentFullName = $_REQUEST['AppointmentFullName'];
	$AppointmentEmail = $_REQUEST['AppointmentEmail'];
	$AppointmentContactNumber = $_REQUEST['AppointmentContactNumber'];
	$AppointmentDate = $_REQUEST['AppointmentDate'];
	$AppointmentMobileDate = $_REQUEST['AppointmentMobileDate'];
	$AppointmentTime = $_REQUEST['AppointmentTime'];
	$AppointmentMessage = nl2br($_REQUEST['AppointmentMessage']);
	
	if($AppointmentDate=="")
	{
		$AppointmentDate = $AppointmentMobileDate;
	}
	else
	{
		$AppointmentDate = $AppointmentDate;
	}
	
	$headers= "MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\n";
 	$headers.= "From: $AppointmentFullName <$AppointmentEmail>"; //FROM Email Address & Name
	$subject = "Appoimtnent request From $AppointmentFullName"; // Email Subject Line
	$toemail = "name@domain.com"; // to Email Address
	$mailbody = "<table width='600' border='0' cellpadding='3' cellspacing='3'>
				  <tr>
					<td colspan='2' align='left'><font face='Arial, Helvetica, sans-serif' size='4'><strong>Appointment request from  $AppointmentFullName</strong></font></td>
				  </tr>
				  <tr>
					<td colspan='2' align='center'><table width='600' cellpadding='3' cellspacing='3' border='0'>
						<tr>
						  <td><table width='100%' cellspacing='0' cellpadding='12' border='1' bordercolor='#919191'>
							  <tr>
								<td width='32%' align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Name :</font></td>
								<td width='68%' align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentFullName</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Email :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentEmail</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Contact  :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentContactNumber</font></td>
							  </tr>
							  <tr>
								<td align='right'><font face='Arial, Helvetica, sans-serif' size='4'>Appointment Date  :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentDate</font></td>
							  </tr>
							  <tr>
								<td align='right' valign='top'><font face='Arial, Helvetica, sans-serif' size='4'>Appointment Time :</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentTime</font></td>
							  </tr>
							  <tr>
								<td align='right' valign='top'><font face='Arial, Helvetica, sans-serif' size='4'>Message:</font></td>
								<td align='left'><font face='Arial, Helvetica, sans-serif' size='4'>$AppointmentMessage</font></td>
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