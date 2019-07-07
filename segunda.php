<?php 
    include_once('includes/header.php');
?>

<div class="all-title-box">
    <div class="container text-center">
        <h1>Segunda Unidad<span class="m_1">Funciones</span></h1>
    </div>
</div>

<div class="container">
    <div class="row contenido">
        <!-- menu despegable -->
        <div class="col-md-4 menu-temas">
            <div class = "menu_temas">
            <ul>
                <li><a hrfe = "#funciones">1. Funciones</a></li>
                <ul>
                    <li><a hrfe = "#concepto1">1.1 Concepto</a></li>    
                    <li><a hrfe = "#representacion">1.2 Representación de una función</a></li>
                    <li><a hrfe = "#clasificacion">1.3 Clasificación de funciones</a></li>
                    <li><a hrfe = "#funcionpoli">1.4 Función polinominal</a></li>
                    <ul>
                        <li><a hrfe = "#tipopoli">1.4.1 Tipos de función polinominal</a></li>
                    </ul>
                        <li><a hrfe = "#ejemplo1">1.5 Ejemplos</a></li>
                    </ul>
                    <li><a hrfe = "#funciones_E">2. Funciones Exponenciales</a></li>
                    <ul>
                        <li><a hrfe = "#concepto2">2.1 Concepto</a></li>   
                        <li><a hrfe = "#prioridades1">2.2 Prioridades en funciones exponenciales</a></li>   
                        <li><a hrfe = "#ejemplo2">2.3 Ejemplo</a></li>    
                    </ul>
                    <li><a hrfe = "#funciones_L">3. Funciones Logarítmicas</a></li>
                    <ul>
                        <li><a hrfe = "#concepto3">3.1 Concepto</a></li>   
                        <li><a hrfe = "#prioridades2">3.2 Prioridades en funciones logarítmicas</a></li>   
                        <li><a hrfe = "#ejemplo3">3.3 Ejemplo</a></li>    
                    </ul>
                </ul>
            </div>
        </div>
         <!-- Contenido -->
        <div class = "col-md-8">
            <div class = "contenido_temas">
                <div id = "funciones">
                    <h2><b>1. Funciones</b></h2>
                    <p>
                    Las funciones en matemáticas, nos sirven para modelar diversas relaciones entre distintos
                    fenómenos o situaciones, que suceden en nuestra vida cotidiana,  que tienen una causa y efecto, por ejemplo,
                    la cantidad de kilómetros por hora recorridos por un vehículo depende de la velocidad,
                     que el área de un cuadrado depende de la longitud de su lado, o que el costo de la producción
                      está en función al valor de los materiales utilizados.
                    </p></br>
                    
                </div>
                <div id = "concepto1">
                    <h2><b>1.1 Concepto</b></h2>
                        </p>
                        <center>
                            <img src = "images/imagUnid2/unid2_2.png"><br></br>
                        </center>
                        <p>
                            Una función es una correspondencia entre dos conjuntos, dónde a la variable
                            independiente se le asigna un solo valor.
                            Ejemplo: f(x) = x+1
                        <center>
                            <img src = "images/imagUnid2/unid2_3.png"><br></br>
                        </center>
                </div>
                <div id = "representacion">
                    <h2><b>1.2 Representación de una función</b></h2>
                        <p>
                            <b>Analítica:</b></br>
                            se representa a través de símbolos y números que expresan
                            mediante una fórmula matemática
                            <center>
                            <b>F(x) = x + 5</b>
                            </center>     
                            <b>Tabularmente</b></br>
                            se representa a través de pares ordenados <b>(x, y)</b></br>
                            <b>Gráficamente</b></br>
                            se representa a través del dibujo de los pares ordenados en el plano cartesiano.
                            <center>
                                <img src = "images/imagUnid2/unid2_4.png"></br>
                            </center>
                        </p>
                </div>
                <div id = "clasificación">
                    <h2><b>1.3 Clasificación de funciones</b></h2></br>
                        <center>
                            <img src = "images/imagUnid2/unid2_5.png"></br>
                        </center>
                </div>
                <div id = "funcionpoli">
                <h2><b>1.4 Función polinominal</b></h2></br>
                <p>
                Son todoas aquellas funciones formadas por polinomios, dónde el grado del polinomio
                determina el mayor exponente de la variable 
                    <center>
                        <img src = "images/imagUnid2/poli.png"></br>
                    </center></br>
                <b>Dónde:</b>
                <b>n</b> = número positivo</br>
                <b>a</b> = constante real</br>
                <b>Regla:</b></br>
                n >= 0; EZ; a^n != 0</br>
                </p>
                </div>
                <div id = "tipopoli">
                    <h2><b>1.4.1 Tipos de función polinominal</b></h2></br>
                        <p>
                            La Función <b>constante</b> es una línea horizaontal a la altura
                            del valor de la constante f(x) = b. Ejemplo</br>
                            f(x) = -1.5</br>
                            La Función <b>identidad</b> es una línea recta de 45 grados. Ejemplo</br>
                            f(x) = x</br>
                            La Función <b>lineal</b> es de la forma  y = ax + b dónde su dominio e imagen son
                            todos los números reales. Ejemplo</br>
                            f(x) = -5x + 3 {x = 0; y = 0}</br>
                            La Función <b>cuadrática</b> es de la forma f(x) = ax^2 + bx + c^2, su gráfica forma una
                            parábola. Ejemplo</br>
                            f(x) = x^2 - 5x - 14</br>
                            La Función <b>cúbica</b> es de la forma f(x) = ax^3 + ax^2 + ax + b. Ejemplo</br>
                            f(x) = x^3 - 5x^2 + 1
                        </p>
                </div>
                <div id = "ejemplo1">
                    <h2><b>1.5 Ejemplo</b></h2></br>
                        <center>
                            <img src = "images/imagUnid2/unid2_8.png" width = 700  high = 410></br>
                        </center></br>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>