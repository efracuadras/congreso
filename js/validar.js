// JavaScript Document

function validar(form,resultado){
	jQuery(resultado).text(""); //Limpiamos el campo de resultados
	var frm = document.getElementById(form); //Apuntamos al formulario
	for (i=0;i<frm.elements.length;i++){
		//Validacion personalizada por campos
		var variable = frm.elements[i].className;
		var clase = variable.split(" ");
		switch(clase[0]){
			case "valTexto":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;}
					if(_validarLength(frm,i,resultado) 	== false){ return false;}
				break;
			case "valContra":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;} 
					if(_validarLength(frm,i,resultado) 	== false){ return false;}
				break;
			case "valCorreo":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;} 
					if(_validarCorreo(frm,i,resultado) 	== false){ return false;}
				break;
			case "valSelect":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;} 
					if(_validarSelect(frm,i,resultado) 	== false){ return false;}
				break;
			case "valNumerico":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;}
					if(_validarNumerico(frm,i,resultado) 	== false ){return false;}
				break;
			case "valFecha":
					if(_validarVacio(frm,i,resultado) 	== false){ return false;}
				break;
		}
			
	}
	jQuery('#'+frm.elements[0].name).focus();
	return true;
}

//Funciones de Validacion de Estructuras
function _validarVacio(frm,posicion,resultado){
	if(frm.elements[posicion].value == ""){
		jQuery(resultado).html("<div class='alert alert-warning'>EL Campo es Requerido.</div><script>jQuery('.alert').fadeOut(5000);"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		return false;
	}
}
function _validarLength(frm,posicion,resultado){
	if(frm.elements[posicion].value.length < 3 ){ 
		jQuery(resultado).html("<div class='alert alert-warning'>El Campo debe contener mas de 3 Caracteres.</div><script>jQuery('.alert').fadeOut(5000);</script>"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		return false; 
	}
}
function _validarLetras(frm,posicion,resultado){
	var RegExPattern = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
	if(!frm.elements[posicion].value.match(RegExPattern)){
		jQuery(resultado).html("<div class='alert alert-warning'>Escribir solo Letras.</div><script>jQuery('.alert').fadeOut(5000);</script>"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		return false;
	}
}
function _validarNumerico(frm,posicion,resultado){
	if(isNaN(frm.elements[posicion].value)){
		jQuery(resultado).html("<div class='alert alert-warning'>Escribir solo Numeros.</div><script>jQuery('.alert').fadeOut(5000);</script>"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		return false;
	}
}
function _validarCorreo(frm,posicion,resultado){
	var RegExPattern = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if(!frm.elements[posicion].value.match(RegExPattern)){
		 jQuery(resultado).html("<div class='alert alert-warning'>Escribir un Correo Válido.</div><script>jQuery('.alert').fadeOut(5000);</script>"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		 return false;
	}
}
function _validarSelect(frm,posicion,resultado){
	if(frm.elements[posicion].value == 0 ){ 
		jQuery(resultado).html("<div class='alert alert-warning'>Seleccionar un Opcion.</div><script>jQuery('.alert').fadeOut(5000);</script>"); 
		jQuery('#'+frm.elements[posicion].name).focus();
		return false; 
	} 
}