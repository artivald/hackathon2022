<?php 
include_once("ph.php") ;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Заполнение заявки</title>
</head>
<body>
<div class="box">
	<form method="POST"><table border="0">
<tr><td>ФИО </td> <td> <input type="txt" name="username"></td></tr>
<tr><td>Должность</td> <td><input type="txt" name="dol" ></td></tr>
<tr><td>Место работы </td> <td><input type="txt" name="work" ></td></tr>
<tr><td>Тема работы </td><td> <input type="txt" name="tema"></td></tr>
<tr><td>Заголовок работы</td> <td> <input type="txt" name="zag"></td></tr>
<tr><td>Аннотация работы</td> <td> <input type="txt" name="ano"></td></tr>
<tr><td>ССылка на конкурсную работу(PDF/DOCX)</td> <td> <input type="txt" name="ss1"></td></tr>
<tr><td>ССылка на копию конкурсной работы(AVI/MP4)</td> <td> <input type="txt" name="ss2"></td></tr>
<tr><td>ССылка на материал в сети интернет</td> <td> <input type="txt" name="ss3"></td></tr>
<tr> <td><input type="submit" name="go"></td></tr>
<tr><td><a href="index.php">Вернуться на главную </a></td></tr>
	</table> </form>

</div>
</body>
</html>