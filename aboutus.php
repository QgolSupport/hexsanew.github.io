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
	height: auto;
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
	list-style-image: url(../image/bullet.png);
	margin-left: 50px;
	line-height: 35px;
}
.aboutus {
	margin-left: 50px;
	margin-right: 130px;
	margin-top: 20px;
	font-size: 16px;
}
</style>
 <?php  include "googleAnalytic.php"; ?> 
</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header" ><?php  include "header.html"; ?></div>
    <div id="subheader" >
      <?php  include "menu.html"; ?> 
        <!-- end #subheader -->
 
  </div>
  <div class="aboutus">
    <ul> <li>Introducing for the first time in India, Honeycomb Pallets & Boxes manufactured through a fully automated and Integrated Honeycomb Core and Board production  line. </li><br /><li>Can be custom designed. (corner block & end cap)</li>
      <br />

      <li>We have completed two decades of design and manufacturing excellence in the Paper Packaging field.</li>
      <br />
      <li>This offering is from a group of  Technocrats with over a decade of experience developing  Applications using  Paper / Recycled Paper etc.</li>
      <li>The in-house Process standardization expertise available with the team ensures delivery of Quality on a consistent basis.</li>
    </ul>

   <!-- <img src="../image/Factory outside view.jpg" width="400" height="200" /> -->
  </div>

 <div id="footer">
    <p style="color:#C4BD97;">&nbsp;</p>
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
