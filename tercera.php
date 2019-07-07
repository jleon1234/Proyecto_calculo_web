<!--Inicio Header-->
<?php 
    include_once('includes/header.php');
?>
<!--Fin Header-->
<div class="all-title-box">
    <div class="container text-center">
        <h1>Tercera Unidad<span class="m_1">Límites y Continuidad</span></h1>
    </div>
</div>
<div class="container">
    <div class="row contenido">
        <!-- menu despegable -->
        <div class="col-md-4 menu-temas">
            <div class="menu_temas">
                <ul>
                    <li><a href="#derivadas">1.-Límites</a></li>
                    <ul>
                        <li><a href="#limites">¿ Qué son los límites ?</a></li>
                    </ul>
                    <li><a href="#metodos">2.- Métodos para resolver límites</a></li>
                    <ul>
                        <li><a href="#numerico">Método Numérico</a></li>
                        <li><a href="#grafico">Método Gráfico</a></li>
                        <li><a href="#analitico">Método Analítico</a></li>                      
                    </ul>
                    <li><a href="#proiedades">3.- Propiedades de los  límites y límites especiales</a></li>
                    <ul>
                        <li><a href="#lim">Propiedades de los límites</a></li>
                        <li><a href="#especiales">Límites especiales</a></li>      
                    </ul>
                    <li><a href="#teorema">4.- Límites laterales y unilaterales</a></li>
                    <li><a href="#teorema">5.- Teorema de la existencia del límite</a></li>
                    <li><a href="#teorema">6.- Ejercicios resueltos y propuestos</a></li>
    
                </ul>
            </div><!--Fin class= "menu_temas"-->            
        </div><!--Fin class= "col-md-4"-->
        <!-- Contenido -->
        <div class="col-md-8">
            <div class="contenido_temas">
                <div id="limites">
                    <h2><b>1.- ¿ Qué son los límites ?</b></h2>
                    <p>El límite de una función en un punto es obtener el valor al que se va aproximando esa función cuando x tiende a un determinado punto, pero sin llegar a ese punto. Es decir Si f(x) se acerca arbitrariamente a un número L cuando x se aproxima a c, entonces el límite de f(x) cuando x se aproxima a c es L</p>
                    <p>Se representa de la siguiente manera:</p>
                    <div align="center">
                        <img src="images/unidad3/limite.png"width="150" height="50">
                    </div>
                    <p>Que significa, tal y como te acabo de decir, que cuando X tiende al punto Xo, el valor de la función se va aproximando a L, por tanto, el límite de esa función cuando X tiende a Xo es L. Gráficamente quedaría de la siguiente manera:</p>
                    <div align="center">
                        <img src="images/unidad3/grafica.png"width="300" height="300">
                    </div>
                </div><!--Fin id="limites"-->
                <div id="metodos">
                    <h2><b>2.- Métodos para resolver límites:</b></h2>
                    <strong>Métodos:</strong> <br />
                    <div id="numerico" >
                        1.- Método numéricos ( tabla de valores )<br/>
                        <div align="center">
                            <img src="images/unidad3/numerico.png"width="500" height="200">
                        </div>
                    </div>
                    <div id="grafico">
                        2.- Método gráfico<br />
                        <p>El método gráfico consiste en encontrar el valor de f(x) por medio de una Gráfica, normalmente al presentarse este método contara con una función que dara paso a encontrar el limite.</p>
                        <div align="center">
                            <img src="images/unidad3/grafico.png"width="300" height="300">
                        </div>
                    </div> 
                    <div id="analitico"></div>
                            3.- Método analítico ( algebra o cálculo ) <br /><br />
                            <div align="center">
                                <img src="images/unidad3/algebra.png"width="450" height="300">
                    </div>
                </div>                
                <div id="propiedades">
                    <h3><b>3.- Propiedades de los  límites y límites especiales</b></h3>
                    <div id="lim">
                        <strong>Propiedades de los  límites</strong> <br />
                        <div align="center">
                            <img src="images/unidad3/propiedades.png"width="550" height="400">
                        </div>
                    </div>    
                    <div id="especiales">  
                        <strong>Límites especiales</strong> <br />
                        <div align="center">
                            <img src="images/unidad3/especiales.png"width="550" height="700">
                        </div> 
                    </div>        
                </div>
                <div id="laterales">
                    <h3><b>4.- Límites laterales y unilaterales</b></h3>
                    <div align="center">
                        <img src="images/unidad3/laterales.png"width="600" height="300">
                    </div>                     
                </div>
                <div id="teorema">
                    <h3><b>5.- Teorema de la existencia del límite</b></h3>
                    <div align="center">
                        <img src="images/unidad3/teorema.png"width="550" height="150">
                    </div> 
                </div>
                <div id="ejercicios">
                    <h3><b>6.- Ejercicios resueltos y propuestos</b></h3>
                    <a href="images/unidad3/Ejercicios_Limites.pdf" download="Ejercicios_Limites">
                    Descargar Archivo de Ejercicios
                    </a>
     
                </div>

            </div><!--Fin class= "contenido_temas"-->
        </div><!--Fin class= "col-md-8"-->
    </div><!--Fin class= "row"-->
</div><!--Fin class= "container"-->
<div class="clear"></div>      

<!--Footer-->
<?php include_once('includes/footer.php') ?>