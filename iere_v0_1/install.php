<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Run Once</title>
</head>
<body>
<?PHP

include('preferences.php');
include('php-cloudsandra.php');

$cloudsandraApi = new CloudsandraApi();

$icolumn = array('event_id', 'name', 'type', 'start', 'venue_name', 'venue_address_zip', 'price', 'djs', 'artists', 'music_types', 'age_group', 'promoter_id');

$column = array('end', 'venue_address_1', 'venue_address_2', 'venue_address_city', 'venue_address_state', 'venue_address_country', 'phone', 'email', 'website', 'additional_info', 'dress_code');

$response['CF_Events'] = $cloudsandraApi->createColumnFamily($GLOBALS['events_table'], 'UTF8Type');
foreach($icolumn as $value) {
	$response[$value] = $cloudsandraApi->createIndexedColumn($GLOBALS['events_table'], $value, 'UTF8Type');
};
foreach($column as $value) {
	$response[$value] = $cloudsandraApi->createColumn($GLOBALS['events_table'], $value, 'UTF8Type');
};
$responseCF = array_shift($response);
if($responseCF == '{"message":"Success","status":"200","detail":"'.$GLOBALS['events_table'].' ColumnFamily created successfully"}') {echo 'ColumnFamily created successfuly!<br />';} else {echo '<b><i>ColumnFamily not created!</b></i><br />';};
foreach($response as $k => $v) {
	if($v == '{"message":"Success","status":"200","detail":"'.$k.' Column created successfully"}') {echo $k.' column created successfuly!<br />';} else {echo '<b><i>'.$k.' column not created!</b></i><br />';};
};

?>
</body>
</html>