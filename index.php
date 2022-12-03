<?php 
include_once("ph.php") ;
$filename = 'zay.txt' ; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="style.css">
	<title>Главная</title>
</head>
<body>
<a href="zaav.php">Заполнение заявки</a>
<?php 
$file = file($filename); 	
echo "<div class=\"fon\">" ;
foreach ($file as $row) {
		$row = explode("#", $row) ;
	echo "<table border=\"0\"> ";
		echo "<tr><td><div class=\"fio\"> <strong>ФИО:</strong>$row[0]  </td><td><strong>Тема работы: </strong>$row[2]</td></tr>";
		echo "<tr><td><div class=\"fio\"> <strong>Должность:</strong>$row[8]  </td><td><strong>Заголовок работы: </strong>$row[3]</td></tr>" ;
		echo "<tr><td><div class=\"fio\"> <strong>Место работы:</strong>$row[1]  </td><td><strong>Аннотация работы: </strong>$row[4]</td></tr>" ;
		echo "<tr><td><a href=\"$row[6]\">Ссылка на работу </a></td></tr>" ;

		echo "</table>";	}
	    echo "</div>";
?>
</body>
</html>