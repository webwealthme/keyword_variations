<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$videotitle = test_input($_POST["videotitle"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h1>Add Keywords, Cities, State Abbreviation and State Full</h1>
<form method="post" action="#"> 
   <br><br>
   <table><tr><td>Add Keywords:<br/>
   <textarea name="kw" cols="30" rows="10"><?php echo $comment;?></textarea></td><td>Add Cities:<br/>
  <textarea name="city" cols="30" rows="10"><?php echo $comment;?></textarea></td><td>Add State Abbr:<br/>
  <textarea name="stateabbr" cols="10" rows="1"><?php echo $comment;?></textarea></td><td>Add State Full:<br/>
  <textarea name="statefull" cols="20" rows="1"><?php echo $comment;?></textarea></td></tr>
  </table>
     <br><br>

   <input type="submit" name="submit" value="Submit"> 
</form>
<h2>Copy the keyword variations below and put in adwords to see search traffic</h2>
<div class='majesticlinksoutput' name="body" cols="100" rows="20" align="left" style="border-style: groove;border-width: 5px;padding: 10px;">

<?php
$kw = $city = $stateabbr = $statefull = "";

$kw  = $_POST["kw"];
$kwpieces = explode("\n", $kw);
$totalkw = count($kwpieces);

$city  = $_POST["city"];
$citypieces = explode("\n", $city);
$totalcity = count($citypieces);

$stateabbr  = $_POST["stateabbr"];
$stateabbrpieces = explode("\n", $stateabbr);
$totalstateabbr = count($stateabbrpieces);

$statefull  = $_POST["statefull"];
$statefullpieces = explode("\n", $statefull);
$totalstatefull = count($statefullpieces);

$counterkw=0; $countercity=0; $counterstatefull=0; $counterstateabbr=0; $counterkw2=0; $counterkw3=0; $countercity2=0;

$totalkwvariations= ($totalkw*$totalcity);
$totalkwvariationscounter=0;

while ($totalkwvariationscounter!=$totalkwvariations)
{

echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"."<br/>";
echo "$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$stateabbrpieces[$counterstateabbr]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$statefullpieces[$counterstatefull]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"."<br/>";
echo "$kwpieces[$counterkw] IN"." "."$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw] IN"." "."$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw] IN"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw] IN"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw] IN"." "."$citypieces[$countercity]"."<br/>";
echo "$kwpieces[$counterkw] NEAR"." "."$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw] NEAR"." "."$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw] NEAR"." "."$stateabbrpieces[$counterstateabbr]"."<br/>";
echo "$kwpieces[$counterkw] NEAR"." "."$statefullpieces[$counterstatefull]"."<br/>";
echo "$kwpieces[$counterkw] NEAR"." "."$citypieces[$countercity]"."<br/>";
echo "$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$citypieces[$countercity]"." "."$statefullpieces[$counterstatefull]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$stateabbrpieces[$counterstateabbr]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$statefullpieces[$counterstatefull]"." "."$kwpieces[$counterkw]"."<br/>";
echo "$citypieces[$countercity]"." "."$kwpieces[$counterkw]"."<br/>";
//echo "$kwpieces[$counterkw]"." "."$citypieces[$countercity]"." "."$stateabbrpieces[$counterstateabbr]"." $statefullpieces[$counterstatefull]"."<br/>";

$counterkw++;


if($counterkw==($totalkw))
{
$countercity++;
$counterkw=0;
}

$totalkwvariationscounter++;


}

?>

</div>
<p></p>
<?php $totalkwvariationsall = ($totalkwvariations*29);
echo "$totalkwvariationsall"; echo " total kw variations"?>
<br/><br/>
<h2>Template Used:</h2>
<pre>KW + city + ST abbreviation
KW + city + ST FULL
KW + ST abbreviation
KW + ST FULL
KW + city


city + ST abbreviation + KW
city + ST FULL + KW
ST abbreviation + KW
ST FULL + KW

KW + city + ST abbreviation
KW + city + ST FULL
KW + ST abbreviation
KW + ST FULL
KW + city

KW + IN + city + ST abbreviation
KW + IN + city + ST FULL
KW + IN + ST abbreviation
KW + IN + ST FULL
KW + IN + city

KW + NEAR + city + ST abbreviation
KW + NEAR + city + ST FULL
KW + NEAR + ST abbreviation
KW + NEAR + ST FULL
KW + NEAR + city

city + ST abbreviation + KW
city + ST FULL + KW
ST abbreviation + KW
ST FULL + KW
city + KW</pre>
</body>
</html>
