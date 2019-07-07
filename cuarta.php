<?php 
    include_once('includes/header.php');
?>

<div class="all-title-box">
    <div class="container text-center">
        <h1>Cuarta Unidad<span class="m_1">Descripcion corta de la unidad</span></h1>
    </div>
</div>

<div class="container">
    <div class="row contenido">
        <!-- menu despegable -->
        <div class="col-md-4 menu_temas">
            <div class="menu_temas">
                <ul>
                    <li><a href="#derivadas">1.-Derivadas</a></li>
                    <ul>
                        <li><a href="">Subtitulo 1</a></li>
                        <li><a href="">Subtitulo 2</a></li>
                    </ul>
                    <li><a href="#operacion">2.- Operaciones Con Derivadas</a></li>
                    <ul>
                        <li><a href="#suma">Regla: Suma y diferencia</a></li>
                        <li><a href="#producto">Regla: Producto</a></li>
                        <li><a href="#division">Regla: División</a></li>
                        <li><a href="#raiz">Regla: Raíz Cuadrada</a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <!-- Contenido -->
        <div class="col-md-8 ">
            <div class="contenido_temas">
                <div id="derivadas">
                    <h2><b>1.- Que son las derivadas?</b></h2>
                    <p>En matemáticas, la derivada de una función, es la razón de cambio instantánea con la que cambia el valor de dicha función matemática, según cambie el valor de su variable independiente. La derivada de una función es un concepto local, es decir, se calcula como el límite de la rapidez de cambio media de la función en cierto intervalo, cuando el intervalo considerado para la variable independiente se torna cada vez más pequeño. Por ello se habla del valor de la derivada de una función en un punto dado.</p>
                </div>
                <div id="operacion">
                    <h2><b>2.- Operaciones con Derivadas </b></h2>
                </div>
                <div id="suma">
                    <h3><b>2.1.- Regla: Suma y diferencia de funciones</b></h3>
                    <p>La derivada de una suma de dos funciones es igual a la suma de las derivadas de dichas funciones.</p>
                    <p>Esta regla se extiende a cualquier número de sumandos, ya sean positivos o negativos.</p>

                
                </div>
                <div id="producto">
                    <h3><b>2.2.- Regla: Producto</b></h3>
                    <p>En análisis matemático, la regla del producto o regla de Leibniz para la derivación de un producto, gobierna la derivación del producto de funciones derivables.</p>
                    <p>Puede declararse informalmente como "la derivada de la primera por la segunda sin derivar más la primera sin derivar por la derivada de la segunda" o matemáticamente:</p>
                </div>
                <div id="division">
                    <h3><b>2.3.- Regla: Division</b></h3>
                    Aqui va la regla de la division 
                </div>
                <div id="raiz">
                    <h3><b>2.4.- Regla: Raiz Cuadrada</b></h3>
                    Aqui va la regla de la raiz cuadrada 
                </div>


            </div>
        </div>
    </div>
</div>
<div class="clear"></div>


<?php include_once('includes/footer.php') ?>