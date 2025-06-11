<?php

if(isset($_POST['action'])){
$name = $_POST['name'];
$type = $_POST['type'];

echo $action.$name.$type."ok--";

}

/*

if(isset($_REQUEST['action'])){
$name = $_REQUEST['name'];
$type = $_REQUEST['type'];

echo $action.$name.$type."ok--";

}

*/

?>