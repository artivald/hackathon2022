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
<body bgcolor="#000" background="nubex1.jpg">
<div class="box">
	<form method="POST"><table border="0">
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > ФИО </p> </td> <td> <input type="txt" name="username" style="background-color:LightGray;"></td></tr> 
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Должность и Место работы </p> </td> <td><input type="txt" name="dol" style="background-color:LightGray;" ></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Тема работы </p> </td> <td><input type="txt" name="work" style="background-color:LightGray;"></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Заголовок работы </p> </td><td> <input type="txt" name="tema" style="background-color:LightGray;"></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" >  Аннотация работы </p> </td> <td> <input type="txt" name="zag" style="background-color:LightGray;"></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Сcылка на конкурсную работу(PDF/DOCX) </p> </td> <td> <input type="txt" name="ano" style="background-color:LightGray;"></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Сcылка на копию конкурсной работы(AVI/MP4) </p> </td> <td> <input type="txt" name="ss1" style="background-color:LightGray;" ></td></tr>
        
        
<tr><td><p style= "font-size: 30px; color:#FFDEAD;" > Сcылка на материал в сети интернет </p> </td> <td> <input type="txt" name="ss2" style="background-color:LightGray;"></td></tr>
        
        

        

            
        <tr> <td>  <input type="submit" name="go" style="background-color:#ffa257; font-size: 22px;" >   </td></tr>       
        
	</table> </form>
    


    
<br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <tr><td>  <a href="index.php"   style="color:#FFDEAD; font-size: 20px; text-decoration: none;"> Перейти к голосованию  </a>  </td></tr>
    
</div>
</body>
</html>