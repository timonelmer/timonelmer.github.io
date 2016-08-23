
$fb = new Facebook\Facebook([
  'app_id' => '690212971127525',
  'app_secret' => 'd42eda1ce1a1850a0d4f60ea9d45e0b5',
  'default_graph_version' => 'v2.2',
  ]);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', 'EAAJzvrr2ouUBAFOtXwuFfwGyVhE0FxZCyZCyYdozmohucZBqrfXaS8IcHsKY4ne3sUqioBPZAq896nLVKCJF4NPpKsEZCEMTonSMKZBheZA4E1HZCDBdMeMo5KR4ZBaTYLeOFYqi4YC5dtCMurbA2C1jBzSfXDG5HmQIKPeW9l6RDFwZDZD');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];