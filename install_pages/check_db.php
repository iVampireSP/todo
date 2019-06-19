<html>
<head>
<meta http-equiv="refresh" content="2;url=install_db.html">
<meta charset="utf-8">
</head>
<body>
<p>跳转中，请勿操作</p>
</body>
</html>
<?php
$file = fopen("../config/database.php","w+");
echo fwrite($file,'<?php'."\r\n");
echo fwrite($file,'$db_host = '.'"');
echo fwrite($file,$_POST["database_ip"].'"'.';'."\r\n");
echo fwrite($file,'$db_username = '.'"');
echo fwrite($file,$_POST["database_username"].'"'.';'."\r\n");
echo fwrite($file,'$db_password = '.'"');
echo fwrite($file,$_POST["database_password"].'"'.';'."\r\n");
echo fwrite($file,'$db_name = '.'"');
echo fwrite($file,$_POST["database_name"].'"'.';'."\r\n");
echo fwrite($file,'$db = '.'"');
echo fwrite($file,'mysqli_connect($db_host,$db_username,$db_password,$db_name)'.'"'.';'."\r\n");
echo fwrite($file,'?>');
fclose($file);;
?>