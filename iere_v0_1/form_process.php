<?PHP

include('preferences.php');
include('php-cloudsandra.php');

$cloudsandraApi = new CloudsandraApi();

$postinfo = $_POST;

if ($postinfo['element_3_4'] == 'PM') {$shour = $postinfo['element_4_1'] + 12;}else{$shour = $postinfo['element_4_1'];};
if ($postinfo['element_5_4'] == 'PM') {$ehour = $postinfo['element_6_1'] + 12;}else{$ehour = $postinfo['element_6_1'];}; //Puts the times in proper 24-hour format

$event['name'] = urlencode($postinfo['element_1']);
$event['type'] = urlencode($postinfo['element_2']);
$event['start'] = urlencode($postinfo['element_3_3'].'-'.$postinfo['element_3_1'].'-'.$postinfo['element_3_2'].'T'.$shour.':'.$postinfo['element_4_2']);
$event['end'] = urlencode($postinfo['element_5_3'].'-'.$postinfo['element_5_1'].'-'.$postinfo['element_5_2'].'T'.$ehour.':'.$postinfo['element_6_2']);  //Formats times as ISO 8601 dates
$event['venue_name'] = urlencode($postinfo['element_7']);
$event['venue_address_1'] = urlencode($postinfo['element_8_1']);
$event['venue_address_2'] = urlencode($postinfo['element_8_2']);
$event['venue_address_city'] = urlencode($postinfo['element_8_3']);
$event['venue_address_state'] = urlencode($postinfo['element_8_4']);
$event['venue_address_zip'] = urlencode($postinfo['element_8_5']);
$event['venue_address_country'] = urlencode($postinfo['element_8_6']);
$event['price'] = urlencode($postinfo['element_9_1'].'.'.$postinfo['element_9_2']);
$event['djs'] = urlencode($postinfo['element_10']);
$event['artists'] = urlencode($postinfo['element_11']);
for ($i=1;$i<=11;$i++) {
	if($postinfo['element_23_'.$i] == 1) {
		$event['music_types'] .= $i.',';
	};
}; //Creates a string with a list of only those music types checked.
$event['music_types'] = urlencode($event['music_types']);
$event['age_group'] = urlencode($postinfo['element_24']);
$event['dress_code'] = urlencode($postinfo['element_25']);
$event['phone'] = urlencode($postinfo['element_18']);
$event['email'] = urlencode($postinfo['element_19']);
$event['website'] = urlencode($postinfo['element_20']);
$event['additional_info'] = urlencode($postinfo['element_22']);
$event['promoter_id'] = urlencode($postinfo['promoter_id']);
$event['event_id'] = urlencode($postinfo['promoter_id'].'_'.$postinfo['event_id']);//Uses urlencode(); to scrub inputs, both for proper encoding on CloudSandra and to prevent attacks.
$jsonStringObject = '{"rowkeys": [{"rowkey": "'.$event['event_id'].'","columns": [';
foreach($event as $key => $value) {
	$jsonStringObject .='{"columnname": "'.$key.'","columnvalue": "'.$value.'"},';
};
$jsonStringObject = rtrim($jsonStringObject, ',');
$jsonStringObject .= ']}]}';

$response = $cloudsandraApi->bulkPostData($GLOBALS['events_table'], $jsonStringObject);

if($response == '{"message":"Success","status":"200","detail":"Bulk upload successfull."}') {
	ksort($event);
	$query = 'SELECT * WHERE \'KEY\' = \''.$event['event_id'].'\'';
	$response2_e = '{"'.$event['event_id'].'":{"KEY":"'.$event['event_id'].'",';
	foreach($event as $k => $v) {
		$response2_e .= '"'.$k.'":"'.$v.'",';
	};
	$response2_e = rtrim($response2_e, ',').'}}';
	$response2 = $cloudsandraApi->queryCQL($GLOBALS['events_table'],$query);
	if($response2 == $response2_e) {
		echo 'Event created/updated successfuly!<br /><br />'.$response2;
	} else {
		echo 'Event creation failed!  Please try again.';
	};
} else {
	echo 'Could not post info to server!';
};

?>