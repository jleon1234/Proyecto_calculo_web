$(document).ready(function(){

    $(':input').on('change', function(){
        let id = $(this).attr('id');
        let html = '';
        let valor;
        switch (id){
            case 'cuadrado':
                valor = $(this).val();
                html += `Funcion: ${valor}x^2`;
            break;
            case 'signo1':
                valor = $(this).val();
                var contenido = $('#su_funcion').text();
                html = `${contenido} ${valor}`;
                $('#su_funcion').append(html)
                
            break;
            case 'uno':
                valor = $(this).val();
                var contenido = $('#su_funcion').text();
                html = `${contenido} ${valor}X`;
                $('#su_funcion').append(html)
            break;
            case 'signo2':
                valor = $(this).val();
                var contenido = $('#su_funcion').text();
                html = `${contenido} ${valor}`;
                $('#su_funcion').append(html)
            break;
            case 'solo':
                valor = $(this).val();
                var contenido = $('#su_funcion').text();
                html = `${contenido} ${valor}`;
                $('#su_funcion').append(html)
            break;

        }
        $('#su_funcion').html(html);
    });

    $('#graficar').on('click', function(){
		let cuadrado = parseInt($('#cuadrado').val());
		let signo1 = $('#signo1').val();
		let uno = parseInt($('#uno').val());
		let signo2 = $('#signo2').val();
		let solo = parseInt($('#solo').val());

		if(cuadrado && signo1 && uno && signo2 && solo){
			let html = `Funcion : ${cuadrado}X2 ${signo1} ${uno}X ${signo2} ${solo}`;
            let valoresy = `
                <tr>
                    <th>Y</th>
            `;
            let valoresx = `
                <tr>
                    <th>X</th>
            `;
            let valores = '';
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
                valoresx += `
                    <td>${i}</td>
                `;
                valoresy += `
                    <td>${y}</td>
                `;
                // valores += `
				// 	<tr>
				// 		<td>${i}</td>
				// 		<td>${y}</td>
				// 	</tr>
				// `;
            }
            valoresx += `</tr>`;
            valoresy += `</tr>`;
            console.log(valoresy);
            valores = `
                ${valoresx} 
                ${valoresy}
            `;

			$('.graficas').show('slow');
			$('#añadirValores').append(valores);
		}else{
            $('.errores_funcion').show('slow');
            
            setTimeout(function(){
                $('.errores_funcion').hide('slow');
            }, 3000)
		}
	});
   
    




    //**Graficar funcion  */

    // var windowWidth = window.innerWidth;
    
});