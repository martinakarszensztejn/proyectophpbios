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