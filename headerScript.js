
$(document).ready(function()
{
	$("#registerChild").hide();

$(".account").click(function()
{
var X=$(this).attr('id');
if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');
}
else
{
$(".submenu").show();
$(this).attr('id', '1');
}

});
});

//Mouse click on sub menu
$(".submenu").mouseup(function()
{
return false;
});

//Mouse click on my account link
$(".account").mouseup(function()
{
return false;
});


//Document Click
$(document).mouseup(function()
{
	$(".submenu").hide();
	$(".account").attr('id', '');
});

function myFunction(){
	var elemen = document.getElementById("bg");
	//elemen.style.float=top;
	//elemen.style.buttom=100px;
}

$("#unavailable").click(function()
 {	$("#registerChild").show();
 });
	
