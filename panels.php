<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Honeycomb Panels-Hexsa</title>
<LinK rel="shortcut icon" href="favicon.ico">
<meta name="Description" content="Hexsa honeycomb panels are made of 100% recycled paper with superb bonding and finishing. They can be custom-made in a variety of lengths up to 5,000 mm." />

<meta name="Keywords" content="honeycomb panels, honeycomb panel" />
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
	margin-right: 130px;
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
td{align:center;}
.tab {
	font-family: "Courier New", Courier, monospace;
	font-size: 13px;
	border-top-color: #003300;
	border-right-color: #003300;
	border-bottom-color: #FFFFFF;
	border-left-color: #003300;
	border-collapse:collapse;
}
</style>
 <?php  include "googleAnalytic.php"; ?> 
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
  
	  	  
	   <p>
	   <h3 >Panels</h3>
	   </p>Hexsa kraft paper facing panels are manufactured in our Hitech automated panel production line to give excellent bonding and finishing.
    <p>Hexsa panels are manufactured with 100% recycled paper. Even the bonding Adhesive is bio-degradable.</p>
    <p>Hexsa Panles can be used in variety of applications like packaging, wall panelling, POS displays and office/partitions.</p>
    <p>Hexsa panels can be custom made upto lengths of 5,000 mm with the standard width of 1,250 mm.	</p>
    <p>&nbsp;</p>
    <table width="83%" border="1" cellspacing="0" cellpadding="5" class="tab">
      <tr>
        <td width="11%" scope="row"><div align="center"><strong>Sl. No
            </th>
        </strong></div>
        <td width="21%"><div align="center"><strong>Panel type</strong></div></td>
        <td width="18%"><div align="center"><strong>Thickness (mm)</strong></div></td>
        <td width="21%"><div align="center"><strong>Compression kgf/cm<sup>2</sup></strong></div></td>
        <td width="12%"><div align="center"><strong>ECT kgf/cm</strong></div></td>
        <td width="17%"><div align="center"><strong>Flexural Strength kgf</strong></div>          </td>
      </tr>
      <tr>
        <th scope="row"><div align="center">I</div></th>
        <td colspan="5"><strong style="color:#990000">PALLET BOARD</strong></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">1
            </th>
        </div>
        <td>ECO FLEX</td>
        <td align="center"><div align="center">30</div></td>
        <td><div align="center">3.0</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">102</div></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">2
            </th>
        </div>
        <td>HI-FLEX</td>
        <td><div align="center">30</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">10.0</div></td>
        <td><div align="center">128</div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">II</div></th>
        <td colspan="5"><strong style="color:#990000">BOX BOARD</strong></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">1
            </th>
        </div>
        <td>ECO STACK</td>
        <td><div align="center">15</div></td>
        <td><div align="center">3.0</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">51</div></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">2
            </th>
        </div>
        <td>STD STACK</td>
        <td><div align="center">15</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">10.0</div></td>
        <td><div align="center">77</div></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">3
            </th>
        </div>
        <td>HI STACK COMBO</td>
        <td><div align="center">21</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">19.0</div></td>
        <td><div align="center">166</div></td> </tr><tr>
        
     <th scope="row"><div align="center">III</div></th>
        <td colspan="5"><strong style="color:#990000">ECO PACK</strong></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">1</th>
        </div>
        <td>EP15</td>
        <td><div align="center">15</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">-</div></td>
      </tr>
      <tr>
        <td scope="row"><div align="center">2</div>
        <td>EP20</td>
        <td><div align="center">20</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">-</div></td>
      </tr>
      <tr>
        <td scope="row"><div align="center"></div>
        <td>EP25</td>
        <td><div align="center">25</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">-</div></td>
      </tr>
        <tr>
        <td scope="row"><div align="center">4</th>
        </div>
        <td>EP30</td>
        <td><div align="center">30</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">-</div></td>   
      </tr>
      <tr>
        <td scope="row"><div align="center">5</th>
        </div>
        <td>EP50</td>
        <td><div align="center">50</div></td>
        <td><div align="center">2</div></td>
        <td><div align="center">3.5</div></td>
        <td><div align="center">-</div></td>   
      </tr>
    </table>

    <p>&nbsp;</p>
<img src="../image/panels.png" width="300" height="180" />
        <p>&nbsp;</p>
    
  <!-- end #mainContent --></div>

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
