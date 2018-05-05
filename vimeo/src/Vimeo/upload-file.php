<?php

// if (isset($_POST['upload'])) {

// 	$dir_to_search = $_POST['uploadFile']['name'];
// 	echo $dir_to_search.'<br />';
// 	// print_r($_FILES['uploadFile']);

// }

// exit();
echo "<pre>";
require(__DIR__ . '/Vimeo.php');
$config = require(__DIR__ . '/init.php');

if (empty($config['access_token'])) {
    throw new Exception('You can not search without an access token. You can find this token on your app page, or generate one using auth.php');
}
$lib = new Vimeo($config['client_id'], $config['client_secret'], $config['access_token']);
$response = $lib->upload('file:///C:/Users/5ine-desk-i3/Desktop/New%20folder/5ine%20essential%20b2b.mp4');
// $response = $lib->upload('file:///C:/Users/5ine-desk-i3/Desktop/New%20folder/5ine%20essential%20b2b.mp4', [
//     'name' => 'test',
//     'privacy' => [
//         'view' => 'anybody'
//     ]
// ])

$response = $lib->upload('', false);
if ($response == true) {
	echo "ok";
}
else
{
	echo "not ok";
}
	

// test
// With parameters.



?>