function showAtleta(seleccion){

	var es_add = seleccion.localeCompare("addatleta");
	var es_edit = seleccion.localeCompare("editatleta");
	var es_del = seleccion.localeCompare("delatleta");
	var es_test = seleccion.localeCompare("testtest")

	if (es_add==0) {
		if (document.getElementById('addatleta').style.display != 'block') {
			document.getElementById('addatleta').style.display = 'block';
			document.getElementById('delatleta').style.display = 'none';
			document.getElementById('editatleta').style.display = 'none';
		}else{
			document.getElementById('addatleta').style.display = 'none';
		}
	}else if(es_del==0){
		if (document.getElementById('delatleta').style.display != 'block') {
			document.getElementById('delatleta').style.display = 'block';
			document.getElementById('addatleta').style.display = 'none';
			document.getElementById('editatleta').style.display = 'none';
		}else{
			document.getElementById('delatleta').style.display = 'none';
			
		}
	}else if(es_edit==0){
		if (document.getElementById('editatleta').style.display != 'block') {
			document.getElementById('editatleta').style.display = 'block';
			document.getElementById('delatleta').style.display = 'none';
			document.getElementById('addatleta').style.display = 'none';
		}else{
			document.getElementById('editatleta').style.display = 'none';
		}
	}else{
		window.alert("La opción seleccionada no es correcta.");
	}	
}
function showDisciplina(seleccion){

	var es_add = seleccion.localeCompare("adddisciplina");
	var es_edit = seleccion.localeCompare("editdisciplina");
	

	if (es_add==0) {
		if (document.getElementById('adddisciplina').style.display != 'block') {
			document.getElementById('adddisciplina').style.display = 'block';
			
			document.getElementById('editdisciplina').style.display = 'none';
		}else{
			document.getElementById('adddisciplina').style.display = 'none';
		}
	}else if(es_edit==0){
		if (document.getElementById('editdisciplina').style.display != 'block') {
			document.getElementById('editdisciplina').style.display = 'block';
			
			document.getElementById('adddisciplina').style.display = 'none';
		}else{
			document.getElementById('editdisciplina').style.display = 'none';
		}
	}else{
		window.alert("La opción seleccionada no es correcta.");
	}	
}
function checkAddDisciplina(){
	if(document.getElementById('nombredisciplina').value.length<=0 || document.getElementById('nombredisciplina').value.length>=256 ){
		window.alert('El texto ingresado es inválido.');
	}else{
		document.getElementById('formadddisc').submit();
	}
}
function checkAlterarDisciplina(){
	var nombre_nuevo = document.getElementById('nombreDisciplinaAlterada').value;
	if(document.getElementById('nombreDisciplinaAlterada').value.length<=0 || document.getElementById('nombreDisciplinaAlterada').value.length>=256 ){
		window.alert('El texto ingresado es inválido.');
	}else{
		document.getElementById('formeditatleta').submit();
	}
}
function addAtletas(){
	var datoNombre = document.getElementById('nombreatletaadd').value;
	var datoFecha = document.getElementById('fchanacatletaadd').value;
	if(document.getElementById('nombreatletaadd').value.length<=0 || document.getElementById('nombreatletaadd').value.length>=256 ){
		window.alert('El texto ingresado es inválido.');
	}else if(document.getElementById('fchanacatletaadd').value.length==0){
		window.alert('La fecha ingresada es inválida.');
	}else{
		document.getElementById('formaddatleta').submit();
	}

}
function editAtletaww(){
	window.alert("1a1aw");
	
	if(document.getElementById('nombreatletaeditww').value.length<=0 || document.getElementById('nombreatletaeditww').value.length>=256 ){
		window.alert('El texto ingresado es inválido.');
		window.alert("1a1a");
		
	}else if(document.getElementById('fchanacatletaeditww').value.length==0){
		window.alert('La fecha ingresada es inválida.');
		window.alert("2222");
	}else{
		document.getElementById('formeditatletaww').submit();
		window.alert("333");
	}
	window.alert("no entro");

}

