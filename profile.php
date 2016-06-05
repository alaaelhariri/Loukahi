<!DOCTYPE html>
<html id="m1">

<header>
<title>Loqa7e</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" Content="text/html; charset=utf-8">
  <html dir="rtl" lang="ar">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styling.css"/>
<script type="text/javascript" src="profile.js"></script>
</header>

<style>

</style>

<body>
<div class="container">
<h1>إسم المريض: Kareem Yazbeck<h1>
</div>

<div class="container">
 <h2> اللقاحات الباقية  </h2>    
  <table class="table table-striped">
  
    <thead>
      <tr>
        <td><h3>إسم اللقاح</h3></td>
		<td><h3>تاريخ التطعيم</h3></td>
      </tr>
    </thead>
<?php	
for($i=0;$i<3;$i++)
{
?>
	<tr id="<?="tr".$i?>">
        <td><p id="<?="vn".$i?>">اقي</p></td>
        <td><p id="<?="d".$i?>">١٢/١٢/٢٠١٧</p></td>
		<td><input type="button" style="background-color:green;border-color:green" class="btn btn-primary" id="<?="b".$i?>" value="أخذ" onclick="<?="func()"?>"></input></td>
	</tr>
<?php
}
?>	
	</table>
</div>

<div class="container">
 <h2> اللقاحات القديمة</h2>    
  <table class="table table-striped">
  
    <thead>
      <tr>
		<td><h3>إسم اللقاح</h3></td>
		<td><h3>تاريخ التطعيم</h3></td>
		<td><h3>الدكتور</h3></td>
		<td><h3>مكان الذي أخذ في</h3></td>
      </tr>
    </thead>
<?php	
for($i=0;$i<3;$i++)
{
?>
	<tr id="<?="trV".$i?>">
        <td><p id="<?="vnV".$i?>">اقي</td>
        <td><p id="<?="dV".$i?>">١٢/١٢/٢٠١٧</td> 
		<td><p id="<?="dcV".$i?>">د.فراس عقل</td> 
		<td><p id="<?="lV".$i?>">النجدة الشعبية - كفرصارون</td> 
		<td><input type="button" style="background-color:light-blue" class="btn btn-primary" value="أكد" id="<?=$i?>" onclick="<?="fun()"?>"></input></td>
	</tr>
	<?php
}
?>	
	</table>
</div>


<div class="container">
 <h2> اللقاحات المأخوذة</h2>    
  <table class="table table-striped" id="ma2khoda">
  
    <thead>
      <tr>
        <td><h3>إسم اللقاح</h3></td>
		<td><h3>تاريخ التطعيم</h3></td>
		<td><h3>الدكتور</h3></td>
		<td><h3>مكان الذي أخذ في</h3></td>
      </tr>
    </thead>
	<?php	
for($i=0;$i<3;$i++)
{
?>
	<tr>
        <td>اقي</td>
        <td>١٢/١٢/٢٠١٧</td> 
		<td>د.فراس عقل</td> 
		<td>النجدة الشعبية - كفرصارون</td> 
	</tr>
	<?php
}
?>	
<tr id="empty"></tr>
	</table>
</div>


</body>
</div>
</html>