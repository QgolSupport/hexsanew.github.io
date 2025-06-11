<?php
if(isset($_POST['action'])){
$name = $_POST['name'];
$type = $_POST['type'];

//echo "Action: ".$action." Name: ".$name." Type: ".$type;
if(!empty($name) &&  !empty($type))
echo "HTTP 201 CREATED";

}

?>