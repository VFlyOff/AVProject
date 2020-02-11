<html>
<head>
<title>Редактирование</title>
</head>

<body>
<?php
require_once('connect.php');
if (isset($_GET['del_id'])) { 
 $result = mysqli_query($link, 'DELETE FROM `автомобили` WHERE `Код_автомобиля` = '.$_GET['del_id']);
}
if (isset($_GET['edit_id'])) { 
 if (isset($_POST['ProizV'])) { 
 $result = mysqli_query($link, 'UPDATE `автомобили` SET '
 .'`Производитель` = "'.$_POST['ProizV'].'"'
 .'WHERE `Код_автомобиля` = '.$_GET['edit_id']);
 }
  if (isset($_POST['Model'])) { 
 $result = mysqli_query($link, 'UPDATE `автомобили` SET '
 .'`Модель` = "'.$_POST['Model'].'"'
 .'WHERE `Код_автомобиля` = '.$_GET['edit_id']);
 }
  if (isset($_POST['year'])) { 
 $result = mysqli_query($link, 'UPDATE `автомобили` SET '
 .'`Год_выпуска` = "'.$_POST['year'].'"'
 .'WHERE `Код_автомобиля` = '.$_GET['edit_id']);
 }
  if (isset($_POST['BB'])) { 
 $result = mysqli_query($link, 'UPDATE `автомобили` SET '
 .'`Коробка_передач` = "'.$_POST['BB'].'"'
 .'WHERE `Код_автомобиля` = '.$_GET['edit_id']);
 }
  if (isset($_POST['PE'])) { 
 $result = mysqli_query($link, 'UPDATE `автомобили` SET '
 .'`Мощность_двигателя` = "'.$_POST['PE'].'"'
 .'WHERE `Код_автомобиля` = '.$_GET['edit_id']);
 }
 }
?>

<h3>Редактирование машин</h3>
<table border='1'>
<tr>
 <td><b>Производитель</b></td>
 <td><b>Модель</b></td>
 <td><b>Год выпуска</b></td>
 <td><b>Корбка передач</b></td>
 <td><b>Мощность двигателя (ЛС)</b></td>
</tr>
<?php
$result = mysqli_query($link, "SELECT `Код_автомобиля`, `Производитель`, `Модель`,
	`Год_выпуска`,`Коробка_передач`, `Мощность_двигателя` FROM `автомобили`");
while ($array = mysqli_fetch_array($result)) {
 echo '<tr><td>'.$array['Производитель'].'</td>'.
 '<td>'.$array['Модель'].'</td>'.'<td>'.$array['Год_выпуска'].'</td>'.
 '<td>'.$array['Коробка_передач'].'</td>'.'<td>'.$array['Мощность_двигателя'].'</td>'.
 '<td>'.'<a href="?edit_id='.$array['Код_автомобиля'].'">Редактировать</a>'.'</td>'.
 '<td>'.'<a href="?del_id='.$array['Код_автомобиля'].'">Удалить</a>'.'</td></tr>';
}
?>
</table>
<br>
<?php

if (isset($_GET['edit_id'])) { 
 $result = mysqli_query($link, "SELECT `Код_автомобиля`, `Производитель`, `Модель`, 
 	`Год_выпуска`,`Коробка_передач`,`Мощность_двигателя` FROM `автомобили` WHERE `Код_автомобиля`=".$_GET['edit_id']); 
 $array = mysqli_fetch_array($result);
 
 ?>
<table>
<form action="" method="post">
 <tr>
 <td>Производитель:</td>
 <td><input type="text" name="ProizV" value="<?php echo ($array['Производитель']); ?>"></td>
</tr>
<tr>
 <td>Модель:</td>
 <td><input type="text" name="Model" value="<?php echo ($array['Модель']); ?>"></td>
</tr>
<tr>
 <td>Год выпуска:</td>
 <td><input type="text" name="year" value="<?php echo ($array['Год_выпуска']); ?>"></td>
 </tr>
  <td>Коробка передач:</td>
 <td><input type="text" name="BB" value="<?php echo ($array['Коробка_передач']); ?>"></td>
 </tr>
 <td>Мощность двигателя (ЛС):</td>
 <td><input type="text" name="PE" value="<?php echo ($array['Мощность_двигателя']); ?>"></td>
 </tr>
<tr>
 <td colspan="2"><input type="submit" value="Сохранить"></td>
 </tr>
</form>
</table>
 <?php
 }
?>
</body>
</html>