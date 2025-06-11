<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Honeycomb packaging</title>
<LinK rel="shortcut icon" href="favicon.ico">

<script src="slide/jquery.js"></script>

<script>
$(document).ready(function(){
$('#submit').click(mail);
});
	
function mail(){	
var name = $('#name').val();
var email = $('#email').val();
var subject = $('#subject').val();
var message = $('#message').val();

if(name == "" || email == "" || subject == "" || message == ""){
alert('Kindly fill all the fields.');
}else{
	
  	$.ajax({
	url:'mail.php',
	data:'name='+ name+'&email='+ email+'&subject='+ subject+'&message='+ message,

	success: function(data){

	//if(data == 1){
	//alert('mail sent successfully!');
	alert(data);
	//}
}
});
}

}

</script>

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
	height: 800px;
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
	margin-bottom: 0px;
	margin-top: 125px;
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
.oneColLiqCtrHdr #container #submainContent span {
	margin: 0px;
	padding: 0px;
}

 .aboutus li {
	list-style-image: url(image/bullet.png);
	font-size: 18px;
	margin-right: 200px;
	margin-left: 50px;
	line-height: 35px;
}
#container .biodegrade {
	font-size: 16px;
	height: 500px;
	margin-left:100px;
}
</style>
</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header" ><br />
    <input type="image" height="90px" width="200px" src="../image/logo2.jpg" />
  <!-- end #header --></div>
    <div id="subheader" >
      <?php  include "menu.html"; ?> 
        <!-- end #subheader -->
 
  </div>
  <div class="biodegrade">
    <p>Approximate Decomposition rates*</p>
    
    <table width="60%"  align="left" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td width="35%">Paper Honeycomb</td>
        <td width="9%">:</td>
        <td width="56%">1 month </td>
      </tr>
      <tr>
        <td>Wood</td>
        <td>:</td>
        <td>10-15 years</td>
      </tr>
      <tr>
        <td>Styrofoam</td>
        <td>:</td>
        <td>Eternity</td>
      </tr>
      <tr>
        <td colspan="3">* according to the EPA: <a href="http://www.earth911.org" target="_blank">www.earth911.org</a></td>
      </tr>
    </table>



  </div>

 <div id="footer">
    <p style="color:#C4BD97;">Home  |  Product  | About us   | Contact us&#13;</p>
    <div style="text-align:right;"> ©  2012 Hexsa. All rights reserved.&#13; </div>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36893795-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
