<?php

function send_sms($to,$from,$msg_sms){
	$url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
    [
      'api_key' =>  '',
      'api_secret' => '',
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

if ($Passw == "yourpassword"){
	echo "<html>";
	echo "<b>From: ".$from."</b>"."<br>";
	echo "<b>To: ".$to."</b>"."<br>";
	echo "<b>Message: ".$Message."</b>"."<br>";
	echo "</html>";
	echo send_sms($to,$from,$Message);

}else{
	echo "<html>";
	echo "<b>Invalid Password</b>";
	echo "</html>";
}













?>