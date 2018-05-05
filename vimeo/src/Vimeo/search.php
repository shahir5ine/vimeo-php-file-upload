<?php
$query=$_POST['query'];
$sort=$_POST['sort'];
$direction=$_POST['direction'];
require(__DIR__ . '/Vimeo.php');
$config = require(__DIR__ . '/init.php');

if (empty($config['access_token'])) {
    throw new Exception('You can not search without an access token. You can find this token on your app page, or generate one using auth.php');
}
$lib = new Vimeo($config['client_id'], $config['client_secret'], $config['access_token']);

//Show first page of results, Set the number of items to show on each page to 50, Sort by relevance, Show results in descending order, and Filter only Creative Commons License videos
$search_results = $lib->request('/videos', array('page' => 2,'per_page'=> 12,  'query' => $query, 'sort' => $sort, 'direction' => $direction,'width'=>'200' ));
// echo "<pre>";
// $count=0;
// print_r ($search_results);
// exit();
	
$videos = array($search_results['body']['data']);
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>SEARCH RESULT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="body2">
	<center>
		<h1>SEARCH RESULT</h1>
		<h3><?php echo $query ?></h3>
	</center>
	<div class="container">
<?php
	foreach ($videos as $row) {
		foreach ($row as $row2) {
			$name= $row2['name'];
			$data=array($row2['embed']);
			foreach ($data as $row3) { ?>

			<div class="col-sm-4">
				<div class="mainbox">
					<div class="mainbox-body">
						<?php echo  $row3['html']; ?>
					</div>
					<div class="mainbox-footer">
						<h4><?php echo $name; ?></h4>
					</div>
				</div>
			</div>
			<?php }
		}
	}
 ?>
</div>
</body>
</html>















<?php 

// echo '<iframe src="https://player.vimeo.com/video/'.$n.'" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

//see outout

//call me your mobile no?


 //are your hindi lang understanding
 //no to english and south  ionk okd ian lang


 //to out output video show in page form database path access and store in server folder correct na

 // no i am only fetching vido like but it display all details 


 //your parsing page show


//hello i am current ios and ionic developer but your problem understing

 //this solve cost is  rs.300

 // ok i will disckes with my team leader and update u 


 //see my contact no.9260303151 but current don't call boss in back side......


 //your problem solve its 1.30 pm

 //ok thank u


// $jarray = array();

// foreach($search_results as $v){
//   $videoinfo = $lib->request('/videos', array('video_id' => $v->id));
	
//   $jarray[] = array(
//   "thumbnail" => $videoinfo->thumbnails,
//   "url" => $videoinfo->urls->url,
//   "title" => $videoinfo->title,
//   "username" => $videoinfo->owner->display_name,
//   "userurl" => $videoinfo->owner->profileurl,
//   "userpic" => $videoinfo->owner->portraits
//   );
// }

// print_r($jarray);
// die();