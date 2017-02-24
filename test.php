<?php
 
// The fully qualified URL to your WHMCS installation root directory
$url = "https://wwwdev:0TcQlBuS@wwwdev.hkisl.net/includes/api.php"; # URL to WHMCS API file

// Admin username and password
$username = "software";
$password = "pDuYG71P";
 
// Set post values
$postfields["username"] = $username;
$postfields["password"] = md5( $password );
$postfields["action"] = "addclient"; 
 $postfields["firstname"] = "Test";
 $postfields["lastname"] = "User";
 $postfields["companyname"] = "WHMCS";
 $postfields["email"] = "demo@whmcs.com";
 $postfields["address1"] = "123 Demo Street";
 $postfields["city"] = "Demo";
 $postfields["state"] = "Florida";
 $postfields["postcode"] = "AB123";
 $postfields["country"] = "US";
 $postfields["phonenumber"] = "123456789";
 $postfields["password2"] = "demo";
 $postfields["customfields"] = base64_encode(serialize(array("1"=>"Google")));
 $postfields["currency"] = "1";
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 100);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
 $data = curl_exec($ch);
 curl_close($ch);
 
 $data = explode(";",$data);
 var_dump($data);
 foreach ($data AS $temp) {
 	$temp = explode("=",$temp);
	if (!empty(array_filter($temp))){
 		$results[$temp[0]] = $temp[1];
	}
 }
 
 if ($results["result"]=="success") {
   # Result was OK!
 	var_dump($data);
 } else {
   # An error occured
   echo "The following error occured: ".$results["message"];
 }
 
?>