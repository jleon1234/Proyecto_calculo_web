<?php 
    include_once('includes/header.php');
?>

<div class="all-title-box">
    <div class="container text-center">
        <h1>Graficar Funcion<span class="m_1">Esta pequeña app te Ayudara a obtener los valores para poder graficar cualquier funcion cuadratica</span></h1>
    </div>
</div>

<div class="container">
    <div class="row contenido_funcion">
        <!-- menu despegable -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Ingrese la funcion: </label>
            </div>
            <div class="form-group">
                <input type="number" id="cuadrado" min="0" pattern="^[0-9]+">X^2<input type="text" id="signo1" placeholder="+"><input type="number" id="uno" placeholder="2" min="0" pattern="^[0-9]+">X<input type="text" id="signo2" placeholder="-" ><input type="number" id="solo" placeholder="10" min="0" pattern="^[0-9]+"> <br>
            </div>
            <div class="su_funcion">
                <p id="su_funcion"></p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary my-3" id="graficar">Graficar</button>
            </div>
            <div class="alert alert-danger errores_funcion" role="alert">
                Por favor llene todos los campos para obtener los datos
            </div>
            
        </div>
        <div class="col-md-8">
            <h3 id="funcion_mostrar"></h3>
            <div class="row">
                <div class="col-md-5">
                    <div class="tablaValores">
                        <table class="tabla">
                            <tbody id="añadirValores">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>