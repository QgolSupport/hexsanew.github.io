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
}
#application {
	width: 200px;
	font-size: 16px;
}
.lblmessage {
	vertical-align: top;
}
.oneColLiqCtrHdr #container .contactus #form1 td {
	height: 35px;
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
  <div class="contactus">
  
	  	  
	   <p>
	   <h3>Panelling</h3>
	   </p>
    <p><strong>Example Uses</strong> -Q3 Class 1, our fire   rated product achieving BS476 Part 7 (Surface Spread of Flame) for   retail and exhibition use, screening and pin boards. Extreme lightweight   means it is suitable for large structures and suspended ceilings.</p>
    <p><strong>Facing </strong>- 1mm composite card</p>
    <p><strong>Thickness</strong> – Q3 Class 1 is available in a variety of thicknesses from 11mm to 65mm</p>
    <p><strong>Weight </strong>- From 2.4kg/m²</p>
    <p><strong>Construction</strong>– Q3 Class 1 can be supplied with   or without a timber frame, additional internal framing can be positioned   in accordance to your design or fixings requirements and   panels can be supplied with finished decorative edges.</p>
    <p>&nbsp;</p>
        <img src="../image/wall.jpg" width="350" height="210" />
        <p>&nbsp;</p>
    
  <!-- end #mainContent --></div>

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
