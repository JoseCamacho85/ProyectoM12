function cambioPais(id_com)
{
	$.ajax({
     async:true,
     type: "POST",
     
     url:"../DropdownListCiutat.php",
     data:{"data":id_com},
     
     success:tornadaCom
		            
   }); 
}


function tornadaCom (txt) {
	 document.getElementById('ciudadesPOI').innerHTML=txt;  
}