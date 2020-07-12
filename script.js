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
	
	
	if(document.getElementById('nombreatletaeditww').value.length<=0 || document.getElementById('nombreatletaeditww').value.length>=256 ){
		window.alert('El texto ingresado es inválido.');
		
		
	}else if(document.getElementById('fchanacatletaeditww').value.length==0){
		window.alert('La fecha ingresada es inválida.');
		
	}else{
		document.getElementById('formeditatletaww').submit();
		
	}
	

}
function showConsulta(seleccion){

	
	if (seleccion==1) {
		if (document.getElementById('consultaAtletasContainer').style.display != 'block') {
			document.getElementById('consultaAtletasContainer').style.display = 'block';
			
			document.getElementById('consultaDisciplinasContainer').style.display = 'none';
		}else{
			document.getElementById('consultaAtletasContainer').style.display = 'none';
		}
	}else if (seleccion==2){
		if (document.getElementById('consultaDisciplinasContainer').style.display != 'block') {
			document.getElementById('consultaDisciplinasContainer').style.display = 'block';
			
			document.getElementById('consultaAtletasContainer').style.display = 'none';
		}else{
			document.getElementById('consultaDisciplinasContainer').style.display = 'none';
		}
	}

	

	
}
function showArrowDown(){
	
	const urlParams = new URLSearchParams(window.location.search);
	const myParam = urlParams.get('myParam');
	function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, '\\$&');
	    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, ' '));
	}
	var or = getParameterByName('or');
	var ddmarta = getParameterByName('ddmarta');

	if (or==1) {
		document.getElementById('arrowID').src = 'images/consulta/arrow.png';
		document.getElementById('arrowNom').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowDis').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNac').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowEdad').src = 'images/consulta/arrowup.png';
		
	}else if(or==2){
		document.getElementById('arrowID').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNom').src = 'images/consulta/arrow.png';
		document.getElementById('arrowEdad').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNac').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowDis').src = 'images/consulta/arrowup.png';
	}else if(or==3){
		document.getElementById('arrowID').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNom').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowEdad').src = 'images/consulta/arrow.png';
		document.getElementById('arrowNac').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowDis').src = 'images/consulta/arrowup.png';
	}else if(or==4){
		document.getElementById('arrowID').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNom').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowEdad').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNac').src = 'images/consulta/arrow.png';
		document.getElementById('arrowDis').src = 'images/consulta/arrowup.png';
	}else if(or==5){
		document.getElementById('arrowID').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNom').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowEdad').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowNac').src = 'images/consulta/arrowup.png';
		document.getElementById('arrowDis').src = 'images/consulta/arrow.png';
	}

	if(ddmarta==1){
		document.getElementById('arrowDisID').src = 'images/consulta/arrow.png';
		document.getElementById('arrowDisNom').src = 'images/consulta/arrowup.png';
	}else if(ddmarta==2){
		document.getElementById('arrowDisNom').src = 'images/consulta/arrow.png';
		document.getElementById('arrowDisID').src = 'images/consulta/arrowup.png';
	}
}
function ordenar(opc){
	
	
	url = window.location.href;
	var urlfinal = "";
	if (!url.includes("or",3)) {
		if (!url.includes("?",3)){
			url = url.concat("?");
		}
		
		url=url.concat("&");
		
		urlfinal = url.concat("or=");
		urlfinal = urlfinal.concat(opc);
		
	

	}else{
		var pedazo = "or=";
		if (url.includes("or=1",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("or=1",pedazo)
		}else if (url.includes("or=2",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("or=2",pedazo)
		}else if (url.includes("or=3",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("or=3",pedazo)
		}else if (url.includes("or=4",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("or=4",pedazo)
		}else if (url.includes("or=5",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("or=5",pedazo)
		}

		
	}
	if (urlfinal.includes("&ddmarta=1",3)) {
			urlfinal=urlfinal.replace("&ddmarta=1","");
		}else if (urlfinal.includes("&ddmarta=2",3)) {
			urlfinal=urlfinal.replace("&ddmarta=2","");
		}
	window.location.href = urlfinal;
	

}
function ordenarDis(opc){
	
	
	url = window.location.href;
	var urlfinal = "";
	if (!url.includes("ddmarta",3)) {
		if (!url.includes("?",3)){
			url = url.concat("?");
		}
		
		url=url.concat("&");
		
		urlfinal = url.concat("ddmarta=");
		urlfinal = urlfinal.concat(opc);
		
	

	}else{
		var pedazo = "ddmarta=";
		if (url.includes("ddmarta=1",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("ddmarta=1",pedazo)
		}else if (url.includes("ddmarta=2",3)) {
			pedazo=pedazo.concat(opc);
			urlfinal = url.replace("ddmarta=2",pedazo)
		}
		
	}
	if (urlfinal.includes("&or=1",3)) {
			urlfinal=urlfinal.replace("&or=1","");
		}else if (urlfinal.includes("&or=2",3)) {
			urlfinal=urlfinal.replace("&or=2","");
		}else if (urlfinal.includes("&or=3",3)) {
			urlfinal=urlfinal.replace("&or=3","");
		}else if (urlfinal.includes("&or=4",3)) {
			urlfinal=urlfinal.replace("&or=4","");
		}else if (urlfinal.includes("&or=5",3)) {
			urlfinal=urlfinal.replace("&or=5","");
		}
	window.location.href = urlfinal;
	
	

}


