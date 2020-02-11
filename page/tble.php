<html>
<head>
<title>Автомобили</title>
</head>

<body>
<h3>Автомобили</h3>
<table border=1>
  <tr>
	<td><b>Производитель</b></td>
	<td><b>Модель</b></td>
	<td><b>Год выпуска</b></td>
	<td><b>Коробка передач</b></td>
	<td><b>Мощность двигателя (ЛС)</b></td>
  </tr>

<?php
	require_once('connect.php');
	$result = mysqli_query($link, "SELECT * FROM автомобили");
	$array = mysqli_fetch_array($result);
do
{
echo  "<tr><td>".$array['Производитель']."</td><td>".$array['Модель']."</td><td>".
	 $array['Год_выпуска']."</td><td>".$array['Коробка_передач']
	 ."</td><td>".$array['Мощность_двигателя']."</td></tr>";
}
while ($array = mysqli_fetch_array($result));
?>

</table>
</body>
</html>