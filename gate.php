<?php

//Code using curl

//Change your configurations here.
//---------------------------------
$username="qgolinfo";
$api_password="4de4cyndx5zlr2pkf";
$sender="test";
$domain="bulksms.gateway4sms.com";
$priority="1";// 1-Normal,2-Priority,3-Marketing
$method="POST";
//---------------------------------

if(isset($_REQUEST['send']))
{

	$mobile=$_REQUEST['mobile'];

	$message=$_REQUEST['message'];

	$username=urlencode($username);
	$password=urlencode($password);
	$sender=urlencode($sender);
	$message=urlencode($message);

	$parameters="username=$username&api_password=$api_password&sender=$sender&to=$mobile&message=$message&priority=$priority";

	$url="http://$domain/pushsms.php";

	$ch = curl_init($url);

	if($method=="POST")
	{
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
	}
	else
	{
		$get_url=$url."?".$parameters;


		curl_setopt($ch, CURLOPT_POST,0);
		curl_setopt($ch, CURLOPT_URL, $get_url);
	}

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
	curl_setopt($ch, CURLOPT_HEADER,0);  // DO NOT RETURN HTTP HEADERS 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // RETURN THE CONTENTS OF THE CALL
	$return_val = curl_exec($ch);


	if($return_val=="")
	echo "Process Failed, Please check domain, username and password.";
	else
	echo "$return_val";

}

echo "<form name='f1' method='post'>";

echo "<p> Mobile: <input name='mobile' > </p>";

echo "<p> Message: <textarea name='message' ></textarea> </p>";

echo "<p> <input type='submit' value='Send' name='send'></p>";

echo "</form>";

?>