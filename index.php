<!DOCTYPE html>
<html>
<head>
	<title>DMCC TASK</title>
</head>
<body>
<form action="" method="post">
	Name:
	<input type=text name="t1">
	<br>
	<br>
	<input type=submit name="s">
	<?php
	include("main.php");
	if(isset($_POST['s']))
{
	$a=$_POST['t1'];
	$newString = str_replace(' ','_', $a);

	$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=luxury+cars');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;

$domResult = new simple_html_dom();
$domResult->load($result);
echo "<br>";echo "<br>";
foreach($domResult->find('a[href^=/url?]') as $link)
echo $link->plaintext . '<br>';

}

?>
</form>>
</body>
</html>>


