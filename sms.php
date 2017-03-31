<!DOCTYPE html>
<html>
<head>
	<title>SMS Sp00f3r by UN4 [HAXTIVITIEZ]</title>
	<link rel="shortcut icon" type="image/png" href="http://download.seaicons.com/icons/icons8/windows-8/512/Mobile-Sms-icon.png"/>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<center><h3>SMS Sp00f3r by un4ckn0wl3z [HAXTIVITIEZ] v.1.0.0</h3><br>
Website: <a href="https://haxtivitiez.wordpress.com/" target="_blank">https://haxtivitiez.wordpress.com/</a><br>
Special Thank To: God'z Peace. (<a href="https://www.facebook.com/Godz.Peace5678" target="_blank">God'z Peace FB</a>)<br>
<img src="https://media.giphy.com/media/amxLHEPgGDCKs/giphy.gif" height="150" width="150" />
</center>
<?php
$url = "https://rest.nexmo.com/account/get-balance/{api_key}/{api_secret}";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
//echo "<b>Balance : </b>".$response;
$json = json_decode($response, true);
echo "<b>Balance(ยอดเครดิตคงเหลือ)~ : </b>".number_format($json['value'],2)." EUR or ".number_format((($json['value'])*1.073),2)." USD"." or ".number_format(((($json['value'])*1.073))*34.3556,2)." BHT<br>";
echo "<b>Remain(ข้อความที่สามารถส่งได้)~ : </b>".number_format(($json['value']/0.0230))." SMSs"." | <i><u>(0.023 EUR/SMS)</u></i>";
?>
<form method="POST" action="sendme.php">
  <div class="form-group">
    <label for="to">To:</label>
    <input type="text" class="form-control" name="to" placeholder="ใส่เบอร์โทรที่มีรหัสประเทศ ประเทศไทย คือ +66 (ไม่ต้องเติม 0) เช่น +66612400249" required>
  </div>
  <div class="form-group">
    <label for="from">from:</label>
    <input type="text" class="form-control" name="from" placeholder="เป็นภาษาอังกฤษและตัวเลขเท่านั้น (ไม่รองรับภาษาไทย)" required>
  </div>
 <div class="form-group">
    <label for="Message">Message:</label>
    <input type="text" class="form-control" name="Message" placeholder="ข้อความที่ต้องการส่ง" required>
  </div>
  <div class="form-group">
    <label for="Pass">Pass:</label>
    <input type="password" class="form-control" name="Passw" placeholder="ป้อนรหัสผ่าน (ขอรหัสผ่านได้ที่ Godz)" required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</body>
</html>








