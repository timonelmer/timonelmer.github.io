<!DOCTYPE html>
<html>
<head>
<title>Test php</title>
<meta charset="UTF-8">
</head>
<body>

<?php 

include 'facebook.php'; 

$fb = new Facebook\Facebook([
  'app_id' => '690212971127525',
  'app_secret' => 'd42eda1ce1a1850a0d4f60ea9d45e0b5',
  'cookie' => 'true'
  ]);

$session = $facebook->getSession();
$me = null;

if ($session){
	//fb query
	try {
		$me = $facebook->api('/me');
	} catch (FacebookApiException $e) {
		echo $e->getMessage();
	}
}

if($me){
	$logoutUrl = $facebook->getLogoutUrl();
	echo "<a href='$logoutUrl'>Logout</a>";
} else {
	$loginUrl = $facebook->getLoginUrl();
	echo "<a href='$loginUrl'>Login</a>";
}

?>


</body>
</html>