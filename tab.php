<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>jQuery UI Example Page</title>
		<link type="text/css" href="css/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Tabs
				$('#tabs').tabs();

			});
		</script>
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
			
		</style>
	</head>
	<body class="tabpage">


		<!-- Tabs -->
		
		<div id="tabs" style="margin-left:20px;">
        
			<ul>
				<li><a href="#tabs-1">Product</a></li>
				<li><a href="#tabs-2">Industries</a></li>
				</ul>
			<div id="tabs-1">
            <?php  include "product.html";  ?>
            </div>
			<div id="tabs-2">
             <?php  include "industries.html";  ?>
            </div>
		</div>

	</body>
</html>


