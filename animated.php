<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Dialog - Animation</title>
	<link rel="stylesheet" href="ui/themes/base/jquery.ui.all.css">
	<script type="text/javascript" src="ui/jquery-1.7.1.js"></script>
	<script src="ui/jquery.bgiframe-2.1.2.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.mouse.js"></script>
	<script src="ui/jquery.ui.draggable.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.resizable.js"></script>
	<script src="ui/jquery.ui.dialog.js"></script>
	<script src="ui/jquery.effects.core.js"></script>
	<script src="ui/jquery.effects.blind.js"></script>
	<script src="ui/jquery.effects.explode.js"></script>
	
	<script>
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	$(function() {
		$( "#dialog-modal" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});

		$( "#opener" ).click(function() {
			$( "#dialog-modal" ).dialog( "open" );
			
		});
		
			$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
		$( "#dialog-modal" ).dialog({
			height: 300,
			width:500,
			modal: true
		});
		
		
	});
	</script>
</head>
<body>

<div id="dialog-modal" title="Bio-degradable">
<div class="biodegrade">
    <p>Approximate Decomposition rates*</p>
    
    <table width="400"  align="center" border="0" cellspacing="10" cellpadding="5">
      <tr>
        <td width="50%" align="left">Paper Honeycomb</td>
        <td width="5%">:</td>
        <td width="45%" align="left">1 month </td>
      </tr>
      <tr>
        <td align="left">Wood</td>
        <td>:</td>
        <td align="left">10-15 years</td>
      </tr>
      <tr>
        <td align="left">Styrofoam</td>
        <td>:</td>
        <td align="left">Eternity</td>
      </tr>
      <tr>
        <td colspan="3">* according to the EPA</td>
      </tr>
    </table>



  </div>
</div>

<a href="#" id="opener">Bio-degradable</a>

 
</body>
</html>
