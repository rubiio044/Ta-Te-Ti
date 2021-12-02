<?php
include_once("tateti.php");
 
/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/
 
/* Apellido, Nombre. Legajo. Carrera. mail. Github */
/* Rubio, Facundo - Lagajo: FAI-3742 - Correo: facundo.rubiio@gmail.com - Usuario GitHub: rubiio044
Lück, Jorge - Legajo:FAI-3743 - Correo: luckjor_16@hotmail.com - Usuario GitHub: luckjor
Montiel, M. Alejandra - Legajo: FAI-3086 - Correo: maria.montiel@est.fi.uncoma.edu.ar - Usuario GitHub: alemontielnqn */
 
/**************************************/
/***** DEFINICIÓN DE FUNCIONES ********/
/**************************************/

 
/**
 * Módulo 1
 * Crea una estructura de datos para almacenar juegos
 * @param void
 * @return array
 */
function cargarJuegos() {
    //array $juegos      
           
        $juegos[0] = ['jugadorCruz' => 'JORGE', 'jugadorCirculo' => 'JUAN','puntosCruz' => 2, 'puntosCirculo' => 0];
        $juegos[1] = ['jugadorCruz' => 'FACUNDO', 'jugadorCirculo' => 'ALEJANDRA', 'puntosCruz' => 0,'puntosCirculo' => 4];
        $juegos[2] = ['jugadorCruz' => 'JUAN', 'jugadorCirculo' => 'FACUNDO', 'puntosCruz' => 1,'puntosCirculo' => 1];
        $juegos[3] = ['jugadorCruz' => 'JORGE', 'jugadorCirculo' => 'HECTOR', 'puntosCruz' => 1, 'puntosCirculo' => 1];    
        $juegos[4] = ['jugadorCruz' => 'FACUNDO', 'jugadorCirculo' => 'HECTOR', 'puntosCruz' => 2, 'puntosCirculo' => 0];
        $juegos[5] = ['jugadorCruz' => 'ALEJANDRA','jugadorCirculo' => 'JORGE','puntosCruz' => 0,'puntosCirculo' => 5];
        $juegos[6] = ['jugadorCruz' => 'HECTOR', 'jugadorCirculo' => 'ALEJANDRA', 'puntosCruz' => 0, 'puntosCirculo' => 3];
        $juegos[7] = ['jugadorCruz' => 'JUAN','jugadorCirculo' => 'HECTOR','puntosCruz' => 1,'puntosCirculo' => 1];
        $juegos[8] = ['jugadorCruz' => 'FACUNDO', 'jugadorCirculo' => 'JORGE', 'puntosCruz' => 0, 'puntosCirculo' => 3];
        $juegos[9] = ['jugadorCruz' => 'JUAN','jugadorCirculo' => 'ALEJANDRA', 'puntosCruz'=> 1,'puntosCirculo' => 1];
        
        $juegos = [];

        $jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
        $jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
        $jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
        $jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
        $jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
        $jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
        $jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
        $jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
        $jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
        $jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

        array_push($juegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);

        return $juegos;
    }

/**
* Módulo 2
* Muestra el menú de opciones y retorna la opción seleccionada
* @param void
* @return string
*/
function seleccionarOpcion() {
    //string $menuPrincipal
    //int $maximo,$minimo,$opcionNumero
   
    $minimo = 1;
    $maximo = 7;
 
    echo "\n  ## - MENU TATETI - ##\n";
    echo "\n1) Jugar al tateti\n";
    echo "2) Mostrar un juego\n";
    echo "3) Mostrar el primer juego ganador\n";
    echo "4) Mostrar porcentaje de Juegos ganados\n";
    echo "5) Mostrar resumen de Jugador\n";
    echo "6) Mostrar listado de juegos ordenado por jugador O\n";
    echo "7) Salir\n";
 
    $opcionNumero = rangoValores($minimo,$maximo);
    return $opcionNumero;
}
 
/**
 * Módulo 3
 * Esta funcion pide un numero entre un minimo y un maximo
 * si el numero ingresado es mayor o menor a ese rango debera volver a  ingresar otro numero
 * @param int $minimo
 * @param int $maximo
 * @return int
*/
function rangoValores($minimo, $maximo) {
  //int $numeroJuego
    do {
        echo "\nIngrese un número " .$minimo. "-" .$maximo. ": ";
        $numeroJuego = trim(fgets(STDIN));
        if (!(($minimo <= $numeroJuego) && ($numeroJuego <= $maximo))) {
           	echo "Número inválido.\n";
echo "Vuelva a intentar.\n";
         }
    } while (!(($minimo <= $numeroJuego) && ($numeroJuego <= $maximo)));
   
   
    return $numeroJuego;
}
 
/**
 * Módulo 4
 * Esta función solicita un juego y lo muestra
 * @param int $numeroJuego
 * @param array $juegos
 * @return void
 */
function mostrarJuego ($numeroJuego, $juegos) {
  
    if ($juegos[$numeroJuego]["puntosCruz"] > $juegos[$numeroJuego]["puntosCirculo"]) {
     
        echo "\n####################################\n";
        echo "Juego TATETI: " .$numeroJuego. " (GANO X)\n";
        echo "Jugador X: ".$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos\n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"]. " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos\n";
        echo "####################################\n";
       
 
    } elseif ($juegos[$numeroJuego]["puntosCirculo"] > $juegos[$numeroJuego]["puntosCruz"]) {
       
 
        echo "\n####################################\n";
        echo "Juego TATETI: " .$numeroJuego. " (GANO O)\n";
        echo "Jugador X: " .$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos \n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"] . " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos \n";
        echo "####################################\n";
       
    } else {
     
        echo "\n####################################\n";
        echo "Juego TATETI: " .$numeroJuego." (EMPATE)\n";
        echo "Jugador X: " .$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos \n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"] . " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos \n";
        echo "####################################\n";
       
 
    }
}
   
/* Array_push: trata array como si fuera una pila y coloca la variable que se le proporciona al final del array. El tamaño del array será incrementado por el número de variables insertados.*/
 
/**
 * Módulo 5
 * Esta función agrega un juego a la colección
 * @param array $juegos
 * @param array $juegoNuevo
 * @return array
 */
function agregarJuego($juegos, $juegoNuevo){
 
array_push($juegos , $juegoNuevo);
return ($juegos);
}
 
//count:Cuenta todos los elementos en un array o algo de un objeto
 
/**
 * Punto 6
 * Retorna el índice del primer juego ganado por un jugador
 * @param array $juegos
 * @param string $nombreJugador
 * return array
 */
function primerJuegoGanado ($juegos, $nombreJugador) {
    // int $primerJuegoGanado, $contJuegos
    // boolean $flag
    $contJuegos = 0;
    $flag = false;
    $primerJuegoGanado = -1;
    do {
        if ($nombreJugador == $juegos[$contJuegos]['jugadorCruz'] && ($juegos[$contJuegos]['puntosCruz'] > $juegos[$contJuegos]['puntosCirculo'])) {
            $flag = true;
            $primerJuegoGanado = $contJuegos;
        } elseif ($nombreJugador == $juegos[$contJuegos]['jugadorCirculo'] && ($juegos[$contJuegos]['puntosCirculo'] > $juegos[$contJuegos]['puntosCruz'])){
            $flag = true;
            $primerJuegoGanado = $contJuegos;
        }else {
            $contJuegos = $contJuegos + 1;
        }
       
    } while ($contJuegos < (count($juegos)) && $flag==false);
 
    return $primerJuegoGanado;
}
 
 
/**
 * Módulo 7: 
 * Retorna el resumen de un jugador.
 * @param array $juegos
 * @param string $nombreJugador
 * @return array
 */
function resumenJugador($juegos, $nombreJugador) {
 /* int $listaJuegos, $ganadosX, $ganadosO, $perdidosX, $perdidosO,  
 $empatesX , $empatesO, $puntos,  $i , $ganados, $perdidos, $empates */
    $listaJuegos = count($juegos); //count: cuenta los elem del array
    $ganadosX = 0;
    $ganadosO = 0;
    $perdidosX = 0;
    $perdidosO = 0;
    $empatesX = 0;
    $empatesO = 0;
    $puntos = 0;
    //Se obtiene la cant. de juegos ganados por $nombreJugador:
    for ($i = 0; $i < $listaJuegos; $i++) {
        //Se contabilizan los juegos ganados, perdidos y empatados del jugador X
// La función strtoupper convierte en mayus una cadena de string.
        if (strtoupper($juegos[$i]["jugadorCruz"]) == $nombreJugador) {
            if ($juegos[$i]["puntosCruz"] > $juegos[$i]["puntosCirculo"]) {    
                $ganadosX++;
                $puntos = $puntos + $juegos[$i]["puntosCruz"];
            } elseif ($juegos[$i]["puntosCruz"] < $juegos[$i]["puntosCirculo"]) {
                $perdidosX++ ;
            } else {
                $empatesX ++ ;
                $puntos = $puntos + $juegos[$i]["puntosCruz"];
            }
        //Contamos juegos ganados, perdidos y empatados del jugadorO
 
        } elseif (strtoupper($juegos[$i]["jugadorCirculo"]) == $nombreJugador) {
            if ($juegos[$i]["puntosCirculo"] > $juegos[$i]["puntosCruz"]) {
                $ganadosO++;
                $puntos = $puntos + $juegos[$i]["puntosCirculo"];
            } elseif ($juegos[$i]["puntosCirculo"] < $juegos[$i]["puntosCruz"]) {
                $perdidosO++;
            } else {
                $empatesO++;
                $puntos = $puntos + $juegos[$i]["puntosCirculo"];
            }    
        }
    }
    //Sumamos los resultados:
    $ganados = $ganadosX + $ganadosO;
    $perdidos = $perdidosX + $perdidosO;
    $empates = $empatesX + $empatesO;
    
// array jugador 
   $resumenJugador = ["jugador" => $nombreJugador, "juegosGanados" => $ganados, "juegosPerdidos" => $perdidos, "juegosEmpatados" => $empates, "puntosAcumulados" => $puntos];
    return $resumenJugador;
}
 
 /**
  * Módulo 8
  * Solicita un símbolo y retorna el símbolo elegido
  * @param void
  * @return string
  */
 function simbolo(){
 //string símbolo, $simboloValido,
  do{
     echo "\nIngrese un símbolo (X/O): ";
     $simbolo = strtoupper(trim(fgets(STDIN)));
   
      if ($simbolo == "O" || $simbolo == "X"){
          $simboloValido = $simbolo;
      }else{
           echo "\n simbolo inválido!!\n";
      }
    }
while (!($simbolo == "O" || $simbolo == "X"));
       
 
return $simboloValido;
 }
 
/**
 * Módulo 9
 * Esta función retorna la cantidad de juegos ganados
 * @param array $juegos
 * @return int
 */
 
 function cantidadJuegosGanados($juegos){
   //int $cantJuegosGanados, $cantJuegos, $i
   $cantJuegos = count($juegos);
   $cantJuegosGanados = 0;
     
   for ($i = 0; $i < $cantJuegos; $i++){
     if (!($juegos[$i]['puntosCruz'] == $juegos[$i]['puntosCirculo'])){
         $cantJuegosGanados++;
    }
  }  
  return $cantJuegosGanados;
}
   
/**
  * Módulo 10
  * Esta función retorna la cantidad de juegos ganados por el símbolo ingresado 
  * @param array $juegos
  * @param string $simbolo
  * @return int
  */  
function ganadosPorSimbolo($juegosGuardados,$simbolo){
//int $ganadosXCruz, $ganadadosXCirculo, $ganadosPorSimbolo, $ganadosXCirculo
  $ganadosXCruz = 0;
  $ganadadosXCirculo = 0;
  $ganadosPorSimbolo = 0;
  

 for ($i=0; $i < count($juegosGuardados); $i++) { 
    if ($juegosGuardados[$i]['puntosCruz'] > $juegosGuardados[$i]['puntosCirculo']){
        $ganadosXCruz = $ganadosXCruz + 1;
       
    }elseif ($juegosGuardados[$i]['puntosCruz'] < $juegosGuardados[$i]['puntosCirculo']) {
        $ganadadosXCirculo = $ganadadosXCirculo + 1;
       
    }
 }
 
if ($simbolo == "X") {
    $ganadosPorSimbolo = $ganadosXCruz;
    }else {
    $ganadosPorSimbolo = $ganadadosXCirculo;
    }
  return $ganadosPorSimbolo;    
}
 
 /**
 * Módulo 11
 * Este módulo recibe los juegos guardados y los ordena alfabéticamente  
 * por jugador O.
 * uasort:Ordena un array con una función de comparación definida por el 
 * usuario y mantiene la asociación de índices
 * print_r:Imprime información legible para humanos sobre una variable
 * @param array $juegos
 * @return void
 */
function juegosDeOalfabeticamente($juegos) {
 
    uasort ($juegos, 'jugadorCirculo'); 
    print_r ($juegos);
}  
 
/**
 * Módulo 12 
 * comparación string que usa la función uasort
 * Devuelve < 0 si str1 es menor que str2; >
 * 0 si str1 es mayor que str2 y 0 si son iguales.
 * @param array $str1, $str2
 */
function jugadorCirculo ($str1, $str2) {
//$jugadorO
    //la funcion strcmp Comparación de string segura a nivel binario
    $jugadorO = strcmp($str1['jugadorCirculo'], $str2['jugadorCirculo']);
    return $jugadorO;
}
 
 
//round: esta funcion redondea una variable flotante
 
/**
 * Módulo 13
 * Muestra el porcentaje de juegos ganados
 * @param array $juegos
 * @return float
 */  
function calcPorcentaje($simbolo,$juegosGuardados){
     // int $totalJuegosGanados,$cantGanadosPorSimbolo
     // float $porcentaje
     do {
        if ($simbolo == "X" || $simbolo == "O") {
            $cantGanadosPorSimbolo = ganadosPorSimbolo($juegosGuardados,$simbolo);
        }else {
            echo "Símbolo Incorrecto!! Intente nuevamente: ";
            $simbolo = strtoupper(trim(fgets(STDIN)));
            if ($simbolo == "X" || $simbolo == "O") {
                $cantGanadosPorSimbolo = ganadosPorSimbolo($juegosGuardados,$simbolo);
            }
        }
    } while (!($simbolo == "X" || $simbolo == "O"));

    $totalJuegosGanados = cantidadJuegosGanados($juegosGuardados);//Modulo 9

    $porcentaje = round(($cantGanadosPorSimbolo * 100)/$totalJuegosGanados);
    return $porcentaje;
    }

/**
 * Módulo 14 
 * Verifica que el jugador ingresado se encuentre registrado dentro de la colección de juegos.
 * @param string $jugador 
 * @param array $juegosGuardados
 * @return boolean
*/
function existeJugador($jugador,$juegosGuardados){
    //boolean $existe
    //int $cantidad

    $existe = false;
    $cantidad = 0;
    while ($cantidad < count($juegosGuardados) && $existe == false) {
        if ($juegosGuardados[$cantidad]["jugadorCruz"] == $jugador || $juegosGuardados[$cantidad]["jugadorCirculo"] == $jugador) {
            $existe = true;
        } else {
            $existe = false;
        }
    $cantidad = $cantidad + 1;
    }
    return $existe;
}
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
 
//Declaración de variables:0
/*    
 array: $juegosGuardados, $resumen, 
 float: $porcentajeJuegosGanados, 
 int: $opcion, $masChico, $masGrande, $numeroJuego, $indiceGanador,  $mostrarResultado, $totalJuegosGanados,  $i, $indice
 string: $nombreUsuario, $primerGanador, $simbolo, $jugador, 
 boolean: $bandera
*/                    
 
 
/**Inicialización de variables:

 *Proceso
 *$juego = jugar();
 *print_r($juego);
 *imprimirResultado($juego);
 */
$juegosGuardados = cargarJuegos(); 
 
 
do {
    $opcion = seleccionarOpcion();
    $juegos = cargarJuegos();
 
   /*La sentencia switch es similar a una serie de sentencias IF en la misma expresión. 
   En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) 
   con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. 
   Para esto es exactamente la expresión switch. */

    switch ($opcion) { 
        case 1:
 		    //Juega al Tateti
            //invocamos a la func de la galería tateti
            $juego = jugar();  
 
            //invocamos a la func de la galería tateti
            imprimirResultado($juego);
            
            //invocamos al Módulo 5
            $juegosGuardados = agregarJuego($juegosGuardados, $juego); //Modulo 5.
           
            break;
        case 2:
            // Solicita un número dentro de un rango válido y lo muestra
                $masChico = 0;
                $masGrande = count($juegosGuardados)-1;
            if (count($juegosGuardados) > 0) {
                $numeroJuego = rangoValores($masChico, $masGrande); //Modulo 3.
                //Si el numero esta dentro del rango muestra el juego solicitado.
                 mostrarJuego($numeroJuego, $juegosGuardados); //Módulo 4
            } else {
                echo "\nNúmero inválido!!\n";              
            }
 
            break;
       
        case 3:
             // Muestra el primer juego ganado
             if ( count($juegos)  > 0) {
                echo "Ingrese el nombre del jugador: ";
                $primerGanador = strtoupper(trim(fgets(STDIN)));
                $indiceGanador = primerJuegoGanado($juegos, $primerGanador);  //invocamos a la función 6 primerJuegoGanado
               
                if ($indiceGanador >= 0) {
                    mostrarJuego($indiceGanador, $juegos);
                } else {                    
                    echo "El jugador " .$primerGanador. " no ganó ningún juego.\n";
                }
        } else {
                echo "\nNo se ha registrado ningún juego.\n";
            }
            break;
       
        case 4:
            //Muestra porcentaje de juegos ganados segun el simbolo seleccionado.

            echo "Ingrese un símbolo: ";
            $simbolo = strtoupper(trim(fgets(STDIN)));
            $porcentajeJuegosGanados = calcPorcentaje($simbolo,$juegosGuardados);//Módulo 13.
            
            echo "\n#############################\n";
            echo " El porcentaje es de juegos ganados por el símbolo ". $simbolo. "es ". $porcentajeJuegosGanados."%\n";
            echo "#############################\n";
            break;
 
        case 5:
            //Mustra resumen de jugador
            echo "ingrese jugador: ";
            $jugador = strtoupper(trim(fgets(STDIN)));

            $jugadorExiste = existeJugador($jugador,$juegosGuardados);//Módulo 14.
            
        if ($jugadorExiste == true) {
            //Se imprimen en pantalla los resultados.
            $resumen = resumenJugador($juegosGuardados, $jugador);
            echo "##############################################\n";
            echo "Nombre: ".$resumen["jugador"]."\n";
            echo "Juegos ganados: ".$resumen["juegosGanados"]."\n";
            echo "Juegos perdidos: ".$resumen["juegosPerdidos"]."\n";
            echo "Juegos empatados: ".$resumen["juegosEmpatados"]."\n";
            echo "Puntos acumulados: ".$resumen["puntosAcumulados"]."\n";
            echo "#################################################\n";
        }else {
            echo "\nNo se encontraron registros del jugador: ".$jugador."\n";
        }
            break;
        case 6:
            // muestra juegos ordenados del jugador O alfabeticamente
            //
              juegosDeOalfabeticamente ($juegosGuardados);
       
              break;
     
        case 7:
            //Finaliza el juego
              echo "Juego finalizado";
                        
           
              break;
    }
} while ($opcion <> 7);
