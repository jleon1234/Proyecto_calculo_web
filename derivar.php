<?php 
    include_once('includes/header.php');
?>

<div class="all-title-box">
    <div class="container text-center">
        <h1>Derivar Función<span class="m_1">Aplicación que te ayuda a derivar una función de la forma mas básica</span></h1>
    </div>
</div>

<div class="container">
    <div class="row contenido_funcion">
        <!-- menu despegable -->
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" id="der_cubo"  min="0" pattern="^[0-9]+">x3<input type="text" id="der_signo1" ><input type="number" id="der_cuadrado"  min="0" pattern="^[0-9]+">x2<input type="text" id="der_signo2" ><input type="number" id="der_uno"  min="0" pattern="^[0-9]+">X<input type="text" id="der_signo3"  ><input type="number" id="der_solo"  min="0" pattern="^[0-9]+"> <br>
            </div>
            <div class="form-group">
                <button class="btn btn-primary my-3" id="derivar">Derivar</button>
            </div>
            <div class="alert alert-danger errores_derivar" role="alert">
                Por favor llene todos los campos para poder derivar
            </div>
        </div>
        <div class="col-md-8">
                <h4 id="funcion_puesta"></h4>
			    <div id="derivada"></div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>