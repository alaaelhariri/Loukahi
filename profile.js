function func(){
	//var idt=document.getElementById(this.id);
	//var i=parseInt(idt);
	//document.write(idt);	
	var div=document.createElement("DIV");
	var empty=document.getElementById("ma2khoda");
	
	var id=document.getElementById("0");
	
	
	var tr=document.getElementById("tr0");
	var vn=document.getElementById("vn"+id);
	var d=document.getElementById("d"+id);
	var l=document.getElementById("l"+id);
	
		
	
	var td0=document.createElement("TD");
	var td1=document.createElement("TD");
	var td2=document.createElement("TD");
	var td3=document.createElement("TD");
	
	td0.innerHTML=vn0.innerHTML;
	td1.innerHTML=d0.innerHTML;
	td2.innerHTML="...";
	td3.innerHTML="...";
	
	empty.appendChild(td0);
	empty.appendChild(td1);
	empty.appendChild(td2);
	empty.appendChild(td3);
	
	tr.parentNode.removeChild(tr);
}

function fun(){
	
	var div=document.createElement("DIV");
	var empty=document.getElementById("empty");
	
	var id=document.getElementById("0");
	
	
	var tr=document.getElementById("trV0");
	var vn=document.getElementById("vnV"+id);
	var d=document.getElementById("dV"+id);
	//var d=document.getElementById("dV"+id);
	var l=document.getElementById("lV"+id);
	
		
	
	var td0=document.createElement("TD");
	var td1=document.createElement("TD");
	var td2=document.createElement("TD");
	var td3=document.createElement("TD");
	
	td0.innerHTML=vnV0.innerHTML;
	td1.innerHTML=dV0.innerHTML;
	td2.innerHTML=dcV0.innerHTML;
	td3.innerHTML=lV0.innerHTML;
	
	empty.appendChild(td0);
	empty.appendChild(td1);
	empty.appendChild(td2);
	empty.appendChild(td3);
	
	tr.parentNode.removeChild(tr);
}