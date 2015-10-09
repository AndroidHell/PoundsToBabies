<html>
<head>
<title>How Much is that in...</title>
</head>
<body>
<form action="index.php" method="POST">
<h1>How Much Is That In Babies?</h1>
<h3>The origninal pounds to babies converter</h3>

<table>
<tr>
<td>From:  </td>
<td><input type=text name=val></td> 
<td><p>lbs.</p></td> 
</tr>
<tr>
<td>To: </td>
<td>
<select name="to">
<option value=0>--select--</option>
<option value=1>Babies</option>
<option value=2>Watermelon</option>

</select>
</td>
</tr>
</table>
<input type=submit value=Convert>

<?php
if(isset($_POST['val']))
{
$val=$_POST['val'];
if(!preg_match('/^[0-9.]/',$val))
{
echo '<script language="JavaScript">'."\n".'alert("Sorry. I can not calculate retard.");'."\n";
echo "window.location=('index.php');\n";
echo '</script>';
}
$to=$_POST['to'];
if($to==0)
{
echo '<script language="JavaScript">'."\n".'alert("Please select unit to convert to.");'."\n";
echo '</script>';
}
else
{
function assign($to,$val)
{
switch ($to)
{
case 1:
$tounit="babies";$output=(double)($val / 7.5);break;
case 2:
$tounit="Watermelons";$output=(double)($val / 20.0);break;
case 3:
$fromu="GBP";$output=(double)($val / 0.75);break;
case 4:
$fromu="JPY";$output=(double)($val / 0.75);break;
case 5:
$fromu="USD";$output=(double)($val / 0.75);break;
case 6:
$fromu="NOK";$output=(double)($val / 0.75);break;
case 7:
$fromu="SEK";$output=(double)($val / 0.75);break;
case 8:
$fromu="KRW";$output=(double)($val / 0.75);break;
}
/*echo "<br><br><table align=center>
<tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
<tr align=right><td><u> ",(double)($val*$inr),"</u> Indian Rupee</td></tr></table>"; */
echo "<br><br><h3 align=center> ",$val," lbs. is equal to ",$output,"</u> $tounit  </h3>";
}
assign($to,$val);
}
}
?>
</form>
</body>
</html>