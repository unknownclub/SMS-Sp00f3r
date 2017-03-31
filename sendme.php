<?php

function send_sms($to,$from,$msg_sms){
	$url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
    [
      'api_key' =>  '{api_key}',
      'api_secret' => '{api_secret}',
      'to' => $to,
      'from' => $from,
      'text' => $msg_sms,
      'type' => 'unicode'
    ]
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

return $response;
}

$to = $_POST['to'];
$from = $_POST['from'];
$Message = $_POST['Message'];
$Passw = $_POST['Passw'];



echo '
	<link rel="shortcut icon" type="image/png" href="http://download.seaicons.com/icons/icons8/windows-8/512/Mobile-Sms-icon.png"/>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
';



if ($Passw == "hax"){
	echo "<html>";
	echo "<b>From: ".$from."</b>"."<br>";
	echo "<b>To: ".$to."</b>"."<br>";
	echo "<b>Message: ".$Message."</b>"."<br>";
	$result = send_sms($to,$from,$Message);
	echo "<b>Nexmo API Return's Details : </b>";
	echo "<input type='text' class='form-control' name='result' value='".$result."' readonly><br>";
	echo '<br><a href="https://xbotapp.herokuapp.com/sms.php" class="btn btn-info" role="button">Back to SMS sender</a>';
	echo "</html>";

}else{
	echo "<html>";
	echo "<b>Invalid Password</b>";
	echo '<br><a href="https://xbotapp.herokuapp.com/sms.php" class="btn btn-danger" role="button">Back to SMS sender</a>';
	echo "</html>";
}













?>