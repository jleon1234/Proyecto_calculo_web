$(document).ready(function(){

	//codigo para grafica de funciones

	$('#graficar').on('click', function(){
		let cuadrado = parseInt($('#cuadrado').val());
		let signo1 = $('#signo1').val();
		let uno = parseInt($('#uno').val());
		let signo2 = $('#signo2').val();
		let solo = parseInt($('#solo').val());

		let html = `${cuadrado}X2 ${signo1} ${uno}X ${signo2} ${solo}`;
		let valores = ``;

		for (var i = -4; i <= 4; i++) {
			let valor1 = cuadrado * Math.pow(i,2); 
			let valor2 = uno * i;
			let valor3 = solo;
			let y; 
			if(signo1 === '+' && signo2 === '-'){
				y = valor1 + valor2 - valor3;
			}else if(signo1 === '+' && signo2 === '+'){
				y = valor1 + valor2 + valor3;
			}else if(signo1 === '-' && signo2 === '+'){ 
				y = valor1 - valor2 + valor3;
			}else if(signo1 === '-' && signo2 === '-'){
				y = valor1 - valor2 - valor3;
			}
			// let y = cuadrado*Math.pow(i, 2);
			valores += `
				<tr>
					<td>${i}</td>
					<td>${y}</td>
				</tr>
			`;
		}
		$('.graficas').show('slow');
		$('#añadirValores').append(valores);
	});


	//codigo para derivar la funcion
	$('#derivar').on('click', function(){
		let cubo = parseInt($('#der_cubo').val());
		let signo1 = $('#der_signo1').val();
		let cuadrado = parseInt($('#der_cuadrado').val());
		let signo2 = $('#der_signo2').val();
		let uno = parseInt($('#der_uno').val());
		let signo3 = $('#der_signo3').val();
		let solo = parseInt($('#der_solo').val());

		let funcion_puesta = `Funcion Inicial: ${cubo}x3 ${signo1} ${cuadrado}x2 ${signo2} ${uno}x ${signo3} ${solo}`;

		let der_cuadrado = cubo * 3;
		let der_uno = cuadrado * 2;
		let der_solo = uno;
		let derivada = `Derivada: ${der_cuadrado}x2 ${signo1} ${der_uno}x ${signo2} ${der_solo}`;
						

		$('#funcion_puesta').html(funcion_puesta);
		$('#derivada').html(derivada);
	})
});