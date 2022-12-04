<a href="zaav.php"   style="color:#FFDEAD; font-size: 20px; text-decoration: none;"> Перейти к заполнению заявки
</a>  
<?php
include_once("ph.php") ;
$filename = 'zay.txt' ; 
$filename2 = "rez2.txt";
$fd = fopen($filename2, "a+") ;  
fwrite ($fd, $_POST["text"]);    
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="style.css">
	<title>Главная</title>
</head>
<body bgcolor="#000" background="nubex2.jpg">

    

    
<?php 
    
$file = file($filename); 	
echo "<div class=\"fon\">" ;
foreach ($file as $row) {
		$row = explode("#", $row) ;     
        
	   echo "<table border=\"0\"> ";
		echo "<tr><td> <div class=\"fio\"> <strong>ФИО:</strong>$row[0]  </td><td><strong>Заголовок работы </strong>$row[2]</td></tr>";
		echo "<tr><td><div class=\"fio\"> <strong>Должность и место работы:</strong>$row[8]  </td><td><strong>Аннотация работы: </strong>$row[3]</td></tr>" ;
		echo "<tr><td><div class=\"fio\"> <strong>Тема работы:</strong>$row[1] </td></tr>" ;
        echo "<tr><td><a href=\"$row[4]\">Ссылка на материал </a></td></tr>" ;
        echo "<tr><td><a href=\"$row[5]\">Ссылка на видео </a></td></tr>" ;
		echo "<tr><td><a href=\"$row[6]\">Ссылка на статью в интернете </a></td></tr>" ;
               ?>

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
<form method="post">
    <input type="text" name="text">
    <input type="submit" name="log" value="отправить">
    </form>   
    </body>                       
    </html>           
        
	
        <?php 
		echo "</table>";	}
	    echo "</div>";
    
?>
