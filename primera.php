<?php 
    include_once('includes/header.php');
?>

<div class="all-title-box">
    <div class="container text-center">
        <h1>Primera Unidad<span class="m_1">Los números, sus clasificaciones, operaciones y más...</span></h1>
    </div>
</div>

<div class="container">
    <div class="row contenido">
        <!-- menu despegable -->
        <div class="col-md-4 menu_temas">
            <div class="menu_temas">
                <ul>
                    <li><a href="#numeroReales">1. Clasificación de los números reales</a></li>
                    <ul>
                        <li><a href="#numeroEnteros">Números Enteros (Z)</a></li>
                        <li><a href="#fraccionesComunes">Fracciones Comunes</a></li>
                        <li><a href="#decimales">Decimales</a></li>
                    </ul>
                    <li><a href="#propiedades1">2. Propiedades de los números reales</a></li>
                    <ul>
                        <li><a href="#propiedadesdeorden">Propiedades de orden</a></li>
                    </ul>
                    <li><a href="#propiedadesaritmeticas">3. Propiedades aritméticas</a></li>
                    <ul>
                        <li><a href="#conmutativa">Propiedad Conmutativa</a></li>
                        <li><a href="#asociativa">Propiedad Asociativa</a></li>
                        <li><a href="#distributiva">Propiedad Distributiva</a></li>
                        <li><a href="#elementoneutro">Elemento Neutro </a></li>
                        <li><a href="#ejercicios">Ejercicios</a></li>

                    </ul>
                </ul>
            </div>
        </div>
        <!-- Contenido -->
        <div class="col-md-8 ">
            <div class="contenido_temas">
                <div id="numeroReales">
                  <h2><b>1. Números Reales </b></h2>
                  <p>Conjunto de numeros positivos, negativos, sirven para establecer exactitud.<br/><br/></p> 
                  <center><IMG src="images/numeros_reales.png" width="700" height="500"/><br/><br/></center>
                </div>
                <div id ="numeroEnteros">
                  <h3><b>1.1 Numeros Enteros </b></h3>
                    <p>
                    Enteros positivos (Z+): Z+ = {0, 1, 2, 3...N}<br/>
                    Enteros negativos (Z-): Z- = {-1, -2, -3...N}<br/>
                    Números Naturales (N): N = {1, 2, 3...N}<br/>
                    Enteros pares : {-4, -2, 2, 4, 6, 8}<br/>
                    Enteros impares : {-5, -3, 3, 5, 7, 9}<br/>
                    Números Primos {2, 3, 5, 7, 11, 13---}<br/><br/>
                    </p>
                </div>
                <div id = "fraccionesComunes">
                  <h3><strong>1.2 Fracciones Comunes:</strong></h3>
                  <p>
                  <strong>Fracciones propias:</strong> numerador < denominador<br/>
                  Ejemplo : 1/2 = 0.5<br/><br/>
                  <strong>Fracciones impropias:</strong> numerador > denominador<br/>
                  Ejemplo : 2/1 = 2<br/><br/>
                  <strong>Fracciones iguales:</strong> numerador = denominador<br/>
                  Ejemplo : 2/2 = 1<br/><br/>
                  </p>        
                </div>
                <div id = "decimales">
                    <h3><strong>1.3 Decimales</strong></h3>
                    <p>
                      Se clasifican en:<br/>
                      <strong>Decimales exactos:</strong> el resultado del coeficiente es finito <br/>
                      Ejemplo : 1/2 = 0.5<br/><br/>
                      <strong>Decimales periodicos:</strong> el resultado del coeficiente es infinito o repetitivo<br/>
                      Ejemplo : 1/3 = 0.3333333...<br/><br/>
                      <strong>Números irracionales:</strong> son aquellos que no se pueden expresar en forma de fracción<br/><br/>
                      <strong>Irracionales algebraicos:</strong> Provienen de operaciones distintas a la división como raiz cuadrada, cúbica, cuarta, etc.<br/>
                      <strong>Ejemplo:</strong><br/>
                      √2 es: 1.414213...<br/>
                      ∛5 es: 1.709975...<br/><br/>
                      <strong>Irracionales trascendentales:</strong> Son aquellos símbolos de relevancia matemática.<br/>
                      <strong>Ejemplo:</strong><br/>
                      Número pi = 3.14159226...<br/>
                      Numero de euler = 2.7182818...<br/>
                    </p>
                </div>
                <div id="propiedades1">
                    <h2><b>2. Propiedades de los números reales </b></h2>
                </div>
                <div id="propiedadesdeorden">
                    <h3><b>2.1 Ley de tricotmía</b></h3>
                    <p>
                    Establece comparaciones entre números, variables, ecuaciones y desigualdades, básicamente hace referencia a tres símbolos:<br/>
                    1. Existe un número real amenor que b, denotado como a < b<br/>
                    2. Existe un número real amayor que b, denotado como a > b<br/>
                    3. Existe un número aque es igual a b, denotado como a = b<br/><br/>
                    </p>
                    <center>
                      <IMG src="images/orden_operadores.gif" width="500" height="300"/><br/><br/>
                    </center>
                    <h3><b>2.2 Ley de transitividad</b></h3>
                    <p>
                      Permite transferir relaciones de comparación entre tres elementos que estén involucrados e la comparación<br/>
                      <strong>Ejemplo:</strong><br/><br/>
                      Si a < b y b < c por lo tanto a < c<br/>
                          3< 5 y 5 < 7 por lo tanto 3 < 7<br/>
                      Si a > b y b < c por lo tanto a > c<br/>
                          10 > 0 y 0 > -5 por lo tanto …<br/>
                      Si a ≤ c y b ≤ c por lo tanto a ≤ c<br/>
                          2 ≤ 4 y 4 ≤ 6 porlo tanto …<br/><br/>
                      <strong>Axioma del supremo:</strong> Número máximo de un conjunto de datos.<br/>
                      Si a = {1, 2, 3, 4, 5}, el supremo de este conjunto es 5<br/>
                      Si b = {-5, -4, -3, -2, -1}, el supremo de este conjunto es …<br/><br/>
                      <strong>Axioma del ínfimo:</strong> Número mínimo de un conjunto de datos.<br/>
                      Si a = {1, 2, 3, 4, 5}, el ínfimo de este conjunto es 1<br/>
                      Si b = {-5, -4, -3, -2, -1}, el ínfimo de este conjunto es …<br/><br/>
                    </p>
                </div>
                <div id="propiedadesaritmeticas">
                    <h2><b>3. Propiedades Aritméticas</b></h2>
                </div>
                <div id="conmutativa">
                    <h3><b>3.1 Propiedad Conmutativa</b></h3>
                    <p>
                      Descarta la importancia del orden en el que se colocan los datos de una suma o multiplicación.<br/>
                      “El orden de los factores no altera el producto”<br/>
                      “El orden de los sumandos no altera el producto”<br/><br/>
                      <strong>Ejemplos:</strong><br/>
                      La suma de A + B = C es igual que B + A = C <br/>
                      La multiplicación de A * B = C es igual que B * A = C<br/><br/> 
                    </p>
                    
                </div>
                <div id="asociativa">
                    <h3><b>3.2 Propiedad Asociativa </b></h3>
                    <p>
                    <strong>Propiedad asociativa:</strong> esta propiedad aplica para tres o más factores y da la posibilidad de agruparlos sin alterar el resultado final<br/>
                    <strong>Ejemplos:</strong><br/>
                    La suma de (A + B)+ C = D es igual que A +(B + C) = D<br/>
                    La multiplicación de (A * B) * C = D es igual que A*(B * C) = D<br/><br/>
                    </p> 
                </div>
                <div id="distributiva">
                    <h3><b>3.3. Propiedad distributiva</b></h3>
                    <p>
                      Permite reescribir una expresión en su forma desarrollada o factorizada siempre y cuando haya un factor que se repita.<br/>
                      <strong>Ejemplos:</strong><br/>
                      <strong>Forma factorizada X (A + B)</strong><br/>
                      (4*2+3*2)=2*(4+3)=14<br/>
                      (7*3–2*3)=3*(7–2)=15<br/>
                      <strong> Forma desarrollada(AX + BX)</strong><br/>  
                      2*(4+3)=(4*2+3*2)=14<br/>
                      3*(7–2)=(7*3–2*3)=15<br/><br/>
                    </p>
                </div>
                <div id="elementoneutro">
                    <h3><b>3.4 Elemento Neutro</b></h3>
                    <p>
                      Es aquel elemento que al colocarlo en una operación no altera el resultado<br/>
                      <strong>Ejemplos:</strong><br/>
                      <strong>A+-0=A</strong><br/>
                      37+0=37<br/>
                      12–0=12<br/>
                      <strong>A/1=A</strong><br/>  
                      8/1=8<br/>
                      25/1=25<br/><br/>
                      <strong>Importante</strong><br/> 
                      La prioridad de los operadores establece que operación debe realizarse primero<br/><br/>
                    </p> 
                    <center><IMG src="images/simbolos_comparacion.png" width="500" height="200"/><br/><br/></center>
                </div>
                <div id="ejercicios">
                    <h2><b>4. Ejercicios de práctica</b></h2>
                    <p>
                      Identifique a que tipo de números enteros pertenece<br/> 
                      1. A = {0, 1, 2, 3, 4, 5}<br/> 
                      2. A = {1, 2, 3, 4, 5}<br/>  
                      3. A = {-1, -2, -3, -4}<br/> 
                      4. A = {2, 3, 5, 7, 11, 13}<br/> 
                      5. A = {-4, -2, 2, 4, 6}<br/> 
                      6. A = {-7, -5, -3, 3}<br/> 
                      Identifique a que caso de fracciones comunes pertenece<br/> 
                      1. 5 / 2<br/> 
                      2. 1 / 2<br/> 
                      3. 5 / 5<br/> 
                      4. 5 / 10<br/> 
                      5. 1 / 3<br/> 
                      Identifique el axioma supremo e ínfimo a partir del siguientes conjuntos<br/> 
                      1. A = {1, 5, 12, 14, 19, 20}<br/> 
                      2. A = {1/2, 5/1, 1/5, 2/1, 10/5}<br/> 
                    </p>    
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('includes/footer.php') ?>