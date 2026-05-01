	var r_correcta = document.getElementById('r_correcta');
	var respuesta = document.getElementById('devuelve'); 
	var r1=document.querySelector('.r1');
	var r2=document.querySelector('.r2');
	var r3=document.querySelector('.r3');
	var r4=document.querySelector('.r4');
	var pregunta = "¿Qué es Hardware?";

	var v_respuestas = new Array();
	v_respuestas.push({respuesta:"Es la parte lógica de la computadora", correcta:false});
	v_respuestas.push({respuesta:"Es la parte física de la computadora", correcta:true});
	v_respuestas.push({respuesta:"Es la parte fundamental de la computadora", correcta:false});
	v_respuestas.push({respuesta:"Es la parte eficaz de la computadora", correcta:false});

	var btn_respuestas = document.querySelectorAll(".respuesta");
	var div_pregunta = document.getElementById("pregunta");

	div_pregunta.innerHTML = pregunta;

	v_respuestas.sort(function(a,b){
		let random = Math.random()>0.5;
		return random?1:-1;
	});

	var posicion_correcta;

	for(let i=0; i<v_respuestas.length; i++){
		btn_respuestas[i].innerHTML = v_respuestas[i].respuesta;
		if(v_respuestas[i].correcta){
			posicion_correcta = i;
		}
	}

	function comprobar(valor){
		respuesta.innerHTML=null;
					r_correcta.innerHTML=null;
		if(v_respuestas[valor].correcta){
			btn_respuestas[valor].style.background="#50ff39";
			respuesta.innerHTML= "CORRECTO";
			respuesta.style.color ="green";
			r_correcta.innerHTML = "La respuesta correcta es: "+"<span class='r_c'>"+v_respuestas[posicion_correcta].respuesta+"</span>";
				setTimeout(function (){
					respuesta.innerHTML=null;
					r_correcta.innerHTML=null;
					btn_respuestas[valor].style.background="lightgray";					
				}, 4000);
		}
		else{
			btn_respuestas[valor].style.background = "#FF2323";			
			respuesta.innerHTML= "INCORRECTO";
			respuesta.style.color ="red";
			r_correcta.innerHTML = "La respuesta correcta era: "+"<span class='r_c'>"+v_respuestas[posicion_correcta].respuesta+"</span>";
				setTimeout(function (){
					respuesta.innerHTML=null;
					r_correcta.innerHTML=null;
					btn_respuestas[valor].style.background="lightgray";
				}, 8000);
			btn_respuestas[valor].disabled = true;
		}
	}
