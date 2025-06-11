<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Honeycomb packaging</title>
<LinK rel="shortcut icon" href="favicon.ico">
<style type="text/css">

body.oneColLiqCtrHdr {
	font: 80% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; 
	padding: 0;
	text-align: center; 
	color: #000000;
}
.oneColLiqCtrHdr #container {
	width: 80%;
	background: #E6E2D7;
	margin: auto;
	border: 1px solid #000000;
	text-align: left;
}
.oneColLiqCtrHdr #header {
	height: 120px;
	padding-top: 0;
	padding-right: 10px;
	padding-bottom: 0;
	padding-left: 20px;
	background-color: #DDDDDD;
	background-image: url(../image/header.JPG);
}

#subheader {
	height: 40px;
	padding-top: 0;
	padding-right: 10px;
	padding-bottom: 0;
	padding-left: 20px;
	background-color: #DDDDDD;
	background-image: url(../image/subhead.JPG);
	border:1px solid #000000;
}
#menu {
	width:80%;
	height: 20px;
	margin:0;
	color: #ffffff;
	font-size: 14px;
	padding-top: 5px;
	padding-right: px;
	padding-bottom: 5px;
	padding-left: px;
}

.oneColLiqCtrHdr #header h1 {
	margin: 0;
	padding: 10px 0; 
}
.oneColLiqCtrHdr #mainContent {
	height: 400px;
	padding-right: 80px;
	background-color: #E6E2D7;
}
.oneColLiqCtrHdr #submainContent {
	height: 430px;
	padding: 0;
	background: #FFFFFF;	
}

.oneColLiqCtrHdr #footer {
	padding: 0px; 
	background:#DDDDDD;
} 
.oneColLiqCtrHdr #footer p {
	height: 60px;
	margin-bottom:0;
	padding-top: 0;
	padding-right: 10px;
	padding-bottom: 0;
	padding-left: 20px;
	background-color: #DDDDDD;
	background-image: url(../image/footer.JPG);
}
#mainContent {
	border-collapse:collapse;
	padding:5px;
}
#productpicture td{
	margin-left: 30px;
	padding:0px;
	border: thin solid #C4BD97;
	text-align:center;
}

p#frontcontent{
	font-size:14px;
}

#piclabel {
	font-size: 12px;
	font-style: normal;
	background-color:#990000;
	height: 20px;
	width: 130px;
	border-top-color: #FF0000;
	border-right-color: #FF0000;
	border-bottom-color: #FF0000;
	border-left-color: #FF0000;
	color:#FFFFFF;
	text-align:center;
	margin-left:20px;
	margin-bottom:0px 
}
.oneColLiqCtrHdr #container #submainContent span {
	margin: 0px;
	padding: 0px;
}
.contactus {
	margin-left: 50px;
	margin-top: 20px;
	font-size: 16px;
}
#submit {
	color: #FFFFFF;
	background-color: #900000;
	width: 75px;
}

.contactus input{
	width: 200px;
	font-size: 16px;
}
 .contactus textarea{
	
	font-size: 16px;
	width: 200px;
}
#message{ width: 400px;}
#application {
	width: 210px;
	font-size: 16px;
}
.lblmessage {
	vertical-align: top;
}
.oneColLiqCtrHdr #container .contactus #form1 td {
	height: 35px;
}

#info {
	padding-left: 10px;
	border-left-width: 1px;
	border-left-style: dashed;
	border-left-color: #990000;
	font-size: 12px;
}
.contact {
background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 3px 3px 3px 3px;
    color: #555555;
    display: inline-block;
    font-size: 13px;
    height: 24px;
    line-height: 18px;
    margin-bottom: 1px;
    padding-left:5px;  
    width: 210px;
}

.txtarea {
background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 3px 3px 3px 3px;
    color: #555555;
    display: inline-block;
    font-size: 13px;
    
    line-height: 18px;
    margin-bottom: 9px;
    padding-left:5px;  
    width: 210px;
}
.option {
	width: 200px;
	height: 24px;
}


#smscontainer {
	background-color: #BEE7FD;
	padding-top: 0px;
	width: 370px;
	padding-bottom: 0px;
	border: 1px solid #86B6D9;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 10px;	
}
#smsinner {
	background-color: #FFFFFF;
	border: 1px solid #86B6D9;
	margin: 10px;
	padding: 10px;
}
#smstxt {
	width: 370px;
	
}
#char {
	text-align: right;
}

#smstxt {
	width: 320px;
}
#sendsms {
	background-color: #BEE7FD;
	width: 90px;
	margin-right: 20px;
	text-align: right;
	margin-left: 230px;
}
.smshide{
visibility:hidden

}
</style>


<script src="image_scroll/imageScroller_files/jquery-1.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $("#smstoggle").click(function(){
   if($("#smscontainer").hasClass("smshide"))
   {$("#smscontainer").removeClass("smshide");}
   else
   $("#smscontainer").slideToggle(); 
  });
  
});
</script>

<script>
function ischarkey(evt)
{
var charcode = (evt.which) ? evt.which : event.keyCode
//alert(charcode);
if((charcode >= 65 && charcode <= 90) || (charcode >= 97 && charcode <= 122) || charcode == 8 || charcode == 32 || charcode == 46)
return true;
return false;
}

function isnumberkey(evt)
{
var charcode = (evt.which) ? evt.which : event.keyCode
//alert(charcode);
if((charcode >= 48 && charcode <= 57) || charcode == 8 || charcode == 32 || charcode == 45  || charcode == 40  || charcode == 41)
return true;
return false;
}

</script>

<script>
$(document).ready(function(){
$('#submit').click(mail_record);
$('#sendsms').click(send_sms);

});
//--------------------------	
function mail_record(){	
var companyname = $('#companyname').val();
var address = $('#address').val();
var cname = $('#cname').val();
var designation = $('#designation').val();
var contactno = $('#contactno').val();
var application = $('#application').val();
var email = $('#email').val();
var subject = $('#subject').val();
var message = $('#message').val();

if( companyname == "" || address == "" || cname == "" || designation == "" || contactno == ""
 || application == "" || email == "" || subject == "" || message == "")

{
//alert('Kindly fill all the fields.');
$("#msg").html('<span style="color:#ff0000;text-decoration:blink;">Kindly fill all the fields.</span>');
}else{
  	$.ajax({
	url:'mail.php',
	data:'companyname='+ companyname+"&address="+address+"&cname="+cname+"&designation="+designation+"&contactno="+contactno+"&application="+application+"&email="+email+"&subject="+subject+"&message="+message,

	success: function(data){
	    if(data == -1){
		//alert('Mail sent successfully');
		$("#msg").html('<span style="color:#FF0000; text-decoration:blink;">Invalid email ID.</span>');
	}
	
    else if(data == 1){
		//alert('Mail sent successfully');
		$("#msg").html('<span style="color:#000099;">Mail sent successfully !</span>');
	} else {
		//alert('Mail not sent. Pls try again!');
		$("#msg").html('<span style="color:#FF0000; text-decoration:blink;">Mail not sent. please try again !</span>');
	} 
	

}
}
); }

}
//--------------------------

function send_sms(){	
	var from = "9043512474";
	var message = $('#smstxt').val();
	if( from == "" ||  message == ""){
	alert("Pls. Enter your requirement");
	}else{
		$.ajax({
		url:'gateway.php',
		data:'from='+ from+"&message="+message,
		success: function(data){
		alert(data);
		$("#smscontainer").slideUp(); 
			if(data == 1){
				alert("ok");
			} //if
	   } // success function
       });  // ajax
     } //else
} // send_sms
//--------------------------

</script>


</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header" ><?php  include "header.html"; ?>
    
  <!-- end #header --></div>
    <div id="subheader" >
    <?php  include "menu.html"; ?>
      <!-- end #subheader -->
  </div>
  <div class="contactus">
  
	  	  
	<form id="form1" name="form1" method="post" action="mail.php">
    <p>&nbsp;      </p>
    <table width="97%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td width="20%">Company Name* </td>
        <td width="4%">:</td>
        <td width="28%"><input type="text"  name="companyname" class="contact" id="companyname" /></td>
        
        <td width="44%" valign="top" rowspan="8"><div id="info"><p>
        <strong>Safe Corrugated Containers Pvt. Ltd</strong>.,</p>
          <p>No. 12-1-5, Gopal Reddy Kandigai, Gummidipoondi,<p />Chennai - 601 201, Tamil Nadu, India
          <p>Email ID: marketing@hexsa.in</p>
          <p>Phone: (44)-27923454</p>
          <p>Mob: (91)- 9894086315</p>
          <p><img src="image/sms2.png" id= "smstoggle" alt="Send SMS" height="40" width="52" /></p>
        </div>
          <div id=smscontainer class="smshide">
<span style="margin-top:0px;"> Send your enquiry </span>
<div id=smsinner>
<span style="color:#685575;"> * Describe your requirement</span>
<br />
<textarea name="smstxt" rows="5"  id=smstxt style="resize:none;"></textarea>
<br />
<input type="button" id="sendsms" name="sendsms"  value="Send SMS"/>
<!-- <span id="char"> Remaining Characters: 200 </span> -->
</div>
</div></td>
      </tr>
      <tr>
        <td valign="top">Address*</td>
        <td valign="top">:</td>
        <td><textarea name="address" class="formContactus txtarea" id="address"style="resize:none;"cols="26" rows="4"></textarea></td>
        </tr>
      <tr>
        <td>Contact Name* </td>
        <td>:</td>
        <td><input type="text" name="cname" id="cname" class="contact" /></td>
        </tr>
      <tr>
        <td>Designation* </td>
        <td>:</td>
        <td><p><input type="text" name="designation" id="designation" class="contact" />
          </p>          </td>
        </tr>
      <tr>
        <td>Contact no*  </td>
        <td>:</td>
        <td><input type="text" name="contactno" class="contact" id="contactno"  onkeypress = "return isnumberkey(event)"/></td>
        </tr>
      <tr>
        <td>Application* </td>
        <td>:</td>
        <td><select name="application" id="application" class="contact option">
          <option>&nbsp;&nbsp;&nbsp;</option>
          <option>Shipping containers</option>
          <option>Pallets</option>
          <option>Fitments</option>
          <option>Panelling</option>
          <option>Core</option>
          <option>Others</option>
        </select></td>
        </tr>
      <tr>
        <td>Your Mail ID*</td>
        <td>:</td>
        <td><p>
          <input type="text" name="email" id="email" class="contact" />
            </p>          </td>
        </tr>
      <tr>
        <td>Subject*</td>
        <td>:</td>
        <td><input type="text" name="subject" id="subject" class="contact"/></td>
        </tr>
      <tr>
        <td class="lblmessage">Message* </td>
        <td class="lblmessage">:</td>
        <td colspan="2"><textarea name="message" id="message" class="txtarea"style="resize:none;"cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"><input type="button" name="submit"  id="submit" value="Post" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"><p id="msg" style="font-size:22px; font-weight:bold; ">&nbsp;</p></td>
      </tr>
    </table>
    
    </form>
  <!-- end #mainContent --></div>

 <div id="footer">
    <p style="color:#C4BD97;">&nbsp;</p>
    <div style="text-align:right;"> ©  2012 Hexsa. All rights reserved.&#13; </div>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
