<html>
<head>
<title>Добавление записи</title>
</head>
<body>
<?php
require_once('connect.php');
if (isset($_POST['ProizV']) && isset($_POST['Model']) && isset($_POST['year']) &&
    isset($_POST['BB']) && isset($_POST['PE'])){
	$result = mysqli_query($link, "INSERT INTO `автомобили`(`Производитель`,`Модель`,`Год_выпуска`,
															`Коробка_передач`,`Мощность_двигателя`) 
		VALUES ('{$_POST['ProizV']}', '{$_POST['Model']}', '{$_POST['year']}', '{$_POST['BB']}', '{$_POST['PE']}')");
}
if ($result){
	echo'<h3>Успешно выполнено!</h3>';
}
$result = mysqli_query($link, "SELECT * FROM `автомобили`");
$array = mysqli_fetch_array($result);

 ?>
<table>
<td><h3> Добавьте запись!<br /><br /> </h3></td>
<form action="" method="post">
 <tr>
 <td>Производитель:</td>
 <td><input type="text" name="ProizV" value=""></td>
</tr>
<tr>
 <td>Модель:</td>
 <td><input type="text" name="Model" value=""></td>
</tr>
<tr>
 <td>Год выпуска:</td>
 <td><input type="text" name="year" value=""></td>
 </tr>
 <tr>
 <td>Коробка передач:</td>
 <td><input type="text" name="BB" value=""></td>
 </tr>
 <tr>
 <td>Мощность двигателя (ЛС):</td>
 <td><input type="text" name="PE" value=""></td>
 </tr>
<tr>
 <td colspan="2"><input type="submit" value="Сохранить"></td>
 </tr>
</form>
</table>
</body>
</html>
