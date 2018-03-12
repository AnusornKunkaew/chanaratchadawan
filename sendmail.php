<html>
<head>
<title>Sending Email</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?
	$strTo = "admin@chanaratchadawan.com";
	
	$strSubject = "=?UTF-8?B?".base64_encode($_POST["name"])."?=";
	$strHeader .= "MIME-Version: 1.0' . \r\n";
	$strHeader .= "Content-type: text/html; charset=utf-8\r\n"; 
	$strHeader .= "From: ".$_POST["optradio"]."<"."admin@chanaratchadawan.com".">\nReply-To: "."admin@chanaratchadawan.com"."";
	
	$strMessage = nl2br($_POST["message"]." เบอร์ติดต่อกลับ: ".$_POST["tel"]);
	$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader); // @ = No Show Error //
	if($flgSend)
	{
		echo "ส่งอีเมลแล้วค่ะ ทางบริษัทจะติดต่อกลับโดยเร็วที่สุด ขอบคุณค่ะ";
	}
	else
	{
		echo "Email Can Not Send.";
	}
?>
<br />
<br />
<a  href="http://www.chanaratchadawan.com/index.php" >กลับหน้าหลัก</a>
</body>
</html>