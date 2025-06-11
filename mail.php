
  <?php
$email=$_REQUEST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){


$companyname=$_REQUEST['companyname'];
$address=$_REQUEST['address'];
$cname=$_REQUEST['cname'];
$designation=$_REQUEST['designation'];
$contactno=$_REQUEST['contactno'];
$email=$_REQUEST['email'];
$application=$_REQUEST['application'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$subject='Honeycomb Enquiry - '.$subject;


$tab='<table  height="143" border="0"  bordercolor="#ffffff" cellpadding="5" cellspacing=0" style="border-collapse:collapse; border-color:#900000; width:500px;">
  <tr>
    <td width="35%">COMPANY NAME</td>
    <td width="5%">:</td>
    <td width="60%">'. $companyname.'</td>
  </tr>
    <tr>
    <td width="35%">ADDRESS</td>
    <td width="5%">:</td>
    <td width="60%">'. $address.'</td>
  </tr>
  <tr>
    <td>CONTACT NAME</td>
    <td>:</td>
    <td>'.$cname.'</td>
  </tr>
  <tr>
    <td>DESIGNATION</td>
    <td>:</td>
    <td>'.$designation.'</td>
  </tr>
  <tr>
    <td>CONTACT NO</td>
    <td>:</td>
    <td>'.$contactno.'</td>
  </tr>
    <tr>
    <td>EMAIL ID</td>
    <td>:</td>
    <td>'.$email.'</td>
  </tr>
    <tr>
    <td>APPLICATION</td>
    <td>:</td>
    <td>'.$application.'</td>
  </tr>
</table><br /><br />';

$message=$tab.$message;

$to = 'marketing@hexsa.in,development@hexsa.in';
$headers = 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type:text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$email. "\r\n";
//$headers .= 'Cc: ashok@hexsa.in,subash@hexsa.in' . "\r\n";
$headers .= 'Bcc: supports@hexsa.in' . "\r\n";

mail($to,$subject, $message, $headers);
//echo "<span class='mailmsg' >Mail sent successfully.</span>";
if(mail)
  echo "1";
else echo "0";  
}else //echo "<span class='mailmsg' >mail unable to send, please try again!</span>";
  echo "-1";
?>
