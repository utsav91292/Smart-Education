<html>

<body onLoad="javascript:history.back();">

<?php
error_reporting(E_ALL);
chmod("newfile1.txt",0755);
unlink("newfile1.txt");
$myfile = fopen("newfile1.txt", "a") or die("Unable to open file!");
$txt = $_POST["txtarea"];
fwrite($myfile, $txt);
fclose($myfile);
exec('/home/pi/Desktop/Hackathon/keyDetect.py');
echo "File written successfully.";

?>

</body>
</html>
