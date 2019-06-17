$(document).ready(function(){

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
			console.log(signo1);
			console.log(signo2);
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

		console.log(valores)

	});



});