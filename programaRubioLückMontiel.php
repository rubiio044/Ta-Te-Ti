<?php

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Montiel, María Alejandra- Legajo 3086 - TUDW- maria.montiel@est.fi.uncom.edu.ar- alemontielnqn*/





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/** 
* Punto 1
 * Módulo crea una estructura de datos para almacenar juegos 
 * @param void
 * @return array
 */
function cargarJuegos() {
    //array $juegos       
           
        $juegos[0] = ['jugadorCruz' => 'jorge', 'jugadorCirculo' => 'juan','puntosCruz' => 2, 'puntosCirculo' => 0];
        $juegos[1] = ['jugadorCruz' => 'facundo', 'jugadorCirculo' => 'alejandra', 'puntosCruz' => 0,'puntosCirculo' => 4];
        $juegos[2] = ['jugadorCruz' => 'juan', 'jugadorCirculo' => 'facundo', 'puntosCruz' => 1,'puntosCirculo' => 1];
        $juegos[3] = ['jugadorCruz' => 'jorge', 'jugadorCirculo' => 'hector', 'puntosCruz' => 1, 'puntosCirculo' => 1];    
        $juegos[4] = ['jugadorCruz' => 'facundo', 'jugadorCirculo' => 'hector', 'puntosCruz' => 2, 'puntosCirculo' => 0];
        $juegos[5] = ['jugadorCruz' => 'alejandra','jugadorCirculo' => 'jorge','puntosCruz' => 0,'puntosCirculo' => 5];
        $juegos[6] = ['jugadorCruz' => 'hector', 'jugadorCirculo' => 'alejandra', 'puntosCruz' => 0, 'puntosCirculo' => 3];
        $juegos[7] = ['jugadorCruz' => 'juan','jugadorCirculo' => 'hector','puntosCruz' => 1,'puntosCirculo' => 1];
        $juegos[8] = ['jugadorCruz' => 'facundo', 'jugadorCirculo' => 'jorge', 'puntosCruz' => 0, 'puntosCirculo' => 3];
        $juegos[9] = ['jugadorCruz' => 'juan','jugadorCirculo' => 'alejandra', 'puntosCruz'=> 1,'puntosCirculo' => 1];
    
        return $juegos;
    }

/**
* Punto 2
* Muestra el menu de opciones y retorna la opcion seleccionada
* @param void
* @return string 
*/
function seleccionarOpcion() {
    //string $menuPrincipal
    //int $maximo,$minimo,$valido
    $maximo = 7;
    $minimo = 1;

    echo "\n MENU TATETI"."\n";
    echo "1) Jugar al tateti"."\n";
    echo "2) Mostrar un juego"."\n";
    echo "3) Mostrar el primer juego ganador"."\n";
    echo "4) Mostrar porcentaje de Juegos ganados"."\n";
    echo "5) Mostrar resumen de Jugador"."\n";
    echo "6) Mostrar listado de juegos ordenado por jugador O"."\n";
    echo "7) Salir"."\n";

    $valido = validacion($minimo,$maximo);
    return $valido;
}


/** 
 * Punto 3
 * Esta funcion pide un numero entre un minimo y un maximo
 * si el numero ingresado es mayor o menor a ese rango debera volver a  ingresar otro numero
 * @param int $minimo
 * @param int $maximo
 * @return int
 */
function rangoValores($minimo, $maximo) {
  //int $numeroJuego
    do {
        echo "ingrese numeroJuego  " .$minimo. "-" .$maximo. ": ";
        $numeroJuego = trim(fgets(STDIN));
        if (!(($minimo <= $numeroJuego) && ($numeroJuego <= $maximo))) {
            echo "vuelve a intentar.\n";
        }
    } while (!(($minimo <= $numeroJuego) && ($numeroJuego <= $maximo)));
   
   
    return $numeroJuego;
}

/** 
 * Punto 4
 * Esta función solicita un juego y lo expone
 * @param int $numeroJuegoCargado
 * @param array $juegos
 * @return void
 */
function mostrarJuego ($numeroJuego, $juegos) {
    
    if ($juegos[$numeroJuego]["puntosCruz"] > $juegos[$numeroJuego]["puntosCirculo"]) {
      
        echo "####################################\n";
        echo "Juego TATETI: " .$numeroJuego. " (GANO X)\n";
        echo "Jugador X: ".$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos\n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"]. " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos\n";
        echo "####################################\n";
        

    } elseif ($juegos[$numeroJuego]["puntosCirculo"] > $juegos[$numeroJuego]["puntosCruz"]) {
        

        echo "####################################\n";
        echo "Juego TATETI: " .$numeroJuego. " (GANO O)\n";
        echo "Jugador X: " .$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos \n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"] . " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos \n";
        echo "####################################\n";
        
    } else {
      
        echo "####################################\n";
        echo "Juego TATETI: " .$numeroJuego." (EMPATE)\n";
        echo "Jugador X: " .$juegos[$numeroJuego]["jugadorCruz"]. " obtuvo " .$juegos[$numeroJuego]["puntosCruz"]. " puntos \n";
        echo "Jugador O: ".$juegos[$numeroJuego]["jugadorCirculo"] . " obtuvo " .$juegos[$numeroJuego]["puntosCirculo"]. " puntos \n";
        echo "####################################\n";
        

    }
}
    


/**
 * Punto 5
 * Esta función agrega un juego a la colección 
 * @param array $juegos
 * @param array $juegoNuevo
 * @return array 
 */
function agregarJuego ($juegos, $juegoNuevo){
//array $coleccionModificada
  if (count ($coleccionModificada)>0){
    $juegoNuevo[count($coleccionModificada)]=$juegoNuevo;
  
  }else{$colecionModificada[0] = $juegoNuevo;
  }
  return $coleccionModificada;
}


/*
/**El grupo de funciones "guardarN()" almacenan los juegos que se realizaron de forma individual. 
 * Cada funcion ejecuta el archivo tateti.php de forma independiente.
 * Una vez que la primera funcion realiza un juego salta a la segunda, y asi sucecibamente.
 * @param array $juego 
 */ 

 function guardar0($juego){
    /**Ejecuta la funcion jugar() y tetorna el array $juego */
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}
/*function guardar1($juego){
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}
function guardar2($juego){
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}
function guardar3($juego){
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}
function guardar4($juego){
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}
function guardar5($juego){
    include_once("tateti.php");
    $juego = jugar();
    imprimirResultado($juego);
    return $juego;   
}*/
/**Luego que se almacena los datos del juego, estos entran en la siguiente funcion
 * Se encarga de compara el nombre tipiado por el usuario para determinar si este jugo y gano algun juego
 * el retorno es el letrero de que muestra el juego si gano, y en caso contrario se renorna el mensaje enuciado.
 * @param array $memoria0
 * @param array $memoria1
 * @param array $memoria2
 * @param array $memoria3
 * @param array $memoria4
 * @param array $memoria5
 * @param string $jugadorX0
 * @param string $jugadorO0
 * @param string $jugadorX1
 * @param string $jugadorO1
 * @param string $jugadorX2
 * @param string $jugadorO2
 * @param string $jugadorX3
 * @param string $jugadorO3
 * @param string $jugadorX4
 * @param string $jugadorO4
 * @param string $jugadorX5
 * @param string $jugadorO5
 * @param string $usuario
 * @return string
 */

/** 
 * Punto 6 
 * A partir de una colección de juegos y el nombre de un jugador, el módulo retorna el índice que primer juego ganado por dicho jugador 
 * @param array $juegos
 * @param string $nombreJugador
 * return array
 */
function primerJuegoGanado ($juegos, $nombreJugador) {
    // int $i, $primerJuegoGanado, $contJuegos, $flag
    // boolean $flag
    $contJuegos = 0;
    $flag = true;
    $primerJuegoGanado = -1;
    do {
        if ($nombreJugador == $juegos[$contJuegos]['jugadorCruz'] && (juegos[$contJuegos]['puntosCruz'] > $juegos[$contJuegos]['puntosCirculo'])) {
            $flag = false;
            $primerGanado = $contJuegos;
        } elseif ($nombreJugador == $juegos[$contJuegos]['jugadorCirculo'] && ($juegos[$contJuegos]['puntosCirculo'] > $juegos[$contJuegos]['puntosCruz'])){
            $flag = false;
            $primerJuegoGanado = $contJuegos;
        }
        $contJuegos = $contJuegos + 1;
    } while ($contJuegos < (count($juegos)) && $flag);
    return $primerJuegoGanado;
}

  /*
   * function primerJuego($usuario,$jugadorX0,$jugadorO0,$memoria0,$jugadorX1,$jugadorO1,$memoria1,$jugadorX2,$jugadorO2,$memoria2,$jugadorX3,$jugadorO3,$memoria3,$jugadorX4,$jugadorO4,$memoria4,$jugadorX5,$jugadorO5,$memoria5){
//array $primerJuegoGanado
   * //Se compara el valor tipiado con el del jugador cruz del primer juego
    if ($usuario == $jugadorX0) {
        //Se compara el puntaje entre el jugador cruz y jugador circulo.
        if ($memoria0["puntosCruz"] > $memoria0["puntosCirculo"]) {
            //Si el puntaje del jugador cruz es mayor retorna el siguiente mensaje:
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 1  (GANO X)\n"."JUGADOR X: ".$jugadorX0." OBTUVO ".$memoria0["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO0." OBTUVO ".$memoria0["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }
    //Se compara el valor tipiado con el del jugador circulo del primer juego
    }elseif ($usuario == $jugadorO0) {
        //Se compara el puntaje entre el jugador cruz y jugador circulo.
        if ($memoria0["puntosCruz"] < $memoria0["puntosCirculo"]) {
             //Si el puntaje del jugador circulo es mayor retorna el siguiente mensaje:
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 1  (GANO O)\n"."JUGADOR X: ".$jugadorX0." OBTUVO ".$memoria0["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO0." OBTUVO ".$memoria0["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            //Si ninjugo coincide con el valor tipiado retornara el siguiente mensaje
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }//Devido a que el orden de la funcion va en asenso, siempre retornara el primer juego ganado
    elseif ($usuario == $jugadorX1) {
        if ($memoria1["puntosCruz"] > $memoria1["puntosCirculo"]) {    
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 2  (GANO X)\n"."JUGADOR X: ".$jugadorX1." OBTUVO ".$memoria1["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO1." OBTUVO ".$memoria1["puntosCirculo"]." PUNTOS!\n"."###########################\n";   
        }
    }elseif ($usuario == $jugadorO1) {
        if ($memoria1["puntosCruz"] < $memoria1["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 2  (GANO O)\n"."JUGADOR X: ".$jugadorX1." OBTUVO ".$memoria1["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO1." OBTUVO ".$memoria1["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }
    elseif ($usuario == $jugadorX2) {
        if ($memoria2["puntosCruz"] > $memoria2["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 3  (GANO X)\n"."JUGADOR X: ".$jugadorX2." OBTUVO ".$memoria2["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO2." OBTUVO ".$memoria2["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }
    }elseif ($usuario == $jugadorO2) {
        if ($memoria2["puntosCruz"] < $memoria2["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 3  (GANO O)\n"."JUGADOR X: ".$jugadorX2." OBTUVO ".$memoria2["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO2." OBTUVO ".$memoria2["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }
    elseif ($usuario == $jugadorX3) {
        if ($memoria3["puntosCruz"] > $memoria3["puntosCirculo"]) {    
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 4  (GANO X)\n"."JUGADOR X: ".$jugadorX3." OBTUVO ".$memoria3["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO3." OBTUVO ".$memoria3["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }
    }elseif ($usuario == $jugadorO3) {
        if ($memoria3["puntosCruz"] < $memoria3["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 4  (GANO O)\n"."JUGADOR X: ".$jugadorX3." OBTUVO ".$memoria3["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO3." OBTUVO ".$memoria3["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }
    elseif ($usuario == $jugadorX4) {
        if ($memoria4["puntosCruz"] > $memoria4["puntosCirculo"]) {    
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 5  (GANO X)\n"."JUGADOR X: ".$jugadorX4." OBTUVO ".$memoria4["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO4." OBTUVO ".$memoria4["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }
    }elseif ($usuario == $jugadorO4) {
        if ($memoria4["puntosCruz"] < $memoria4["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 5  (GANO O)\n"."JUGADOR X: ".$jugadorX4." OBTUVO ".$memoria4["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO4." OBTUVO ".$memoria4["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }
    elseif ($usuario == $jugadorX5) {
        if ($memoria5["puntosCruz"] > $memoria5["puntosCirculo"]) {    
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 6  (GANO X)\n"."JUGADOR X: ".$jugadorX5." OBTUVO ".$memoria5["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO5." OBTUVO ".$memoria5["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }
    }elseif ($usuario == $jugadorO5) {
        if ($memoria5["puntosCruz"] < $memoria5["puntosCirculo"]) {
            $primerJuego = "\n###########################\n"."JUEGO TATETI: 6  (GANO O)\n"."JUGADOR X: ".$jugadorX5." OBTUVO ".$memoria5["puntosCruz"]." PUNTOS!\n"."JUGADOR O: ".$jugadorO5." OBTUVO ".$memoria5["puntosCirculo"]." PUNTOS!\n"."###########################\n";
        }else {
            $primerJuego = "El juagador ".$usuario." no ah ganado ningun juego\n";
        }
    }
    return $primerJuegoGanado;
}
*/

/**
 * Punto 7
 * Esta función retorna el resumen de un jugador
 * @param array $juegos
 * @param string $nombreJugador
 * @return array
 */
function resumenJugador ($juegos, $nombreJugador){
/* int $juegosGanados, $juegosPerdidos, $juegosEmpatados, $puntosAcumulados, $i, array $resumenJugador, */
	$jugador = "";	
  $juegosGanados = 0;
	$juegosPerdidos = 0;
	$juegosEmpatados = 0;
	$puntosAcumulados = 0;
	
	for ($i=0; $i< count ($juegos); $i++){
		if ($juegos[$i] [‘jugadorCruz’]== $nombreJugador){
			if ($juegos [$i] [‘puntosCruz’] > $juegos [$i] [‘puntosCirculo’]){
				$juegosGanados++;
			}elseif ($juegos [$i] [‘puntosCruz’] == $juegos [$i] [‘puntosCirculo’]){
				$juegosEmpatados++;
			}elseif ($juegos [$i] [‘puntosCruz’] < $juegos [$i] [‘puntosCirculo’]){
				$juegosPerdidos++;
			}
			$puntosAcumulados = $puntosAcumulados + $juegos[$i]['puntosCruz'];
      
		}elseif{($juegos[$i] [‘jugadorCirculo’]== $nombreJugador){
			if ($juegos [$i] [‘puntosCirculo’] > $juegos [$i] [‘puntosCruz’]){
				$juegosGanados++;
			}elseif ($juegos [$i] [‘puntosCirculo’] == $juegos [$i] [‘puntosCruz’]){
				$juegosEmpatados++;
			}elseif ($juegos [$i] [‘puntosCirculo’] < $juegos [$i] [‘puntosCruz’]){
				$juegosPerdidos++;
			}
			$puntosAcumulados= $puntosAcumulados+$juegos[$i]['puntosCirculo'];
        
  }      
    $resumenJugador = ['nombreJugador' => $nombreJugador,'juegosGanados' => $juegosGanados,'juegosPerdidos' => $juegosPerdidos,'juegosEmpatados' => $juegosEmpatados,'puntosAcumulados' => $puntosAcumulados]
	
		return $resumenJugador;
    print_r($resumenJugador);     
 
}
  
 /**
  * Punto 8
  * Esta funcón solicita un símbolo X o O y retorna el sómbolo elegido
  * @param void
  * @return string 
  */
 function simbolo(){
 //string $simboloValido
  do{
     echo "\nIngrese un símbolo (X/O): ";
     $simbolo = strtoupper(trim(fgets(STDIN)));
   
      if ($simbolo == "O" || $simbolo == "X"){
          $simboloValido = $simbolo;
      }else{
           echo "\n simbolo inválido!!\n";
      }
while (!($simbolo == "O" || $simbolo == "X"));
    
return $simboloValido;    
}
   
/**
 * Punto 9
 * Esta función retorna la cantidad de juegos ganados 
 * @param array $juegos
 * @return int
 */
 function cantJuegosGanados($juegos){
   //int $cantJuegosGanados, $$cantJuegos
   $cantJuegos = count ($juegos);
   $cantJuegosGanados = 0;
      
   for ($i = 0; $i< $cantJuegos; $i++){
     if (!($cantJuegos[$juegos]['puntosCruz'] == $cantJuegos[$juegos]['puntosCirculo'])){
         $cantJuegosGanados++;
    }
  }  
  return $cantJuegosGanados;
}
    
 /**
  * Punto 10
  * Esta función retorna la cantidad de juegos ganados por un jugador
  * @param array $juegos
  * @param string $simbolo
  * @return int
  */   
function ganadosPorSimbolo($juegos,$simboloIngresado){
//int $ganadosXCruz, $ganadadosXCirculo, $ganadosPorSimbolo, $ganadosXCirculo
  $ganadosXCruz = 0;
  $ganadadosXCirculo = 0;
  echo "Ingrese simbolo: ";
  $simboloIngresado = strtoupper(trim(fgets(STDIN)));
  
  if ($cantJuegos[$juegos]['puntosCruz'] > $cantJuegos[$juegos]['puntosCirculo'])){
    	$ganadosXCruz = $ganadosXCruz+1;
  }else{
      $ganadosXCirculo = $ganadosXCirculo + 1;
  }return $ganadosPorSimbolo;    
}
   
 /**
  * Putno 11
 * Este módulo recibe los juegos guardados y los ordena alfabéticamente  solo del jugador O
 * @param array $juegos
 * @return void
 */
function juegosDeOalfabeticamente($juegos) {

    uasort ($juegos, 'JugadorCirculo');
    print_r ($juegos);
}

   
/**
 * Devuelve < 0 si str1 es menor que str2; > 
 * 0 si str1 es mayor que str2 y 0 si son iguales.
 * @param array $str1, $str2
 */
function JugadorCirculo ($str1, $str2) {
//$jugadorO
    //la funcion strcmp Comparación de string segura a nivel binario
    $jugadorO = strcmp($str1['jugadorCirculo'], $str2['jugadorCirculo']);
    return $jugadorO;
}

/**
 * Esta función muetra el porcentaje de juegos ganados
 * @param array $juegos
 * @ return float
 */   
function porcentaje($simbolo){
     // int $ciclos, $juegosCirculo, $juegosG, $juegosTotales, float $porcentajeTotal 
    if ($simbolo == "O") {
        $ciclos = 0; 
        do {
            $juegosCirculo = 0;

            $juegosG = cargarJuegos();

            if ($juegosG[$ciclos]['ganador'] == "O") {

                $juegosCirculo = $juegosCirculo + 1;
            }
            $ciclos = $ciclos + 1;

        } while ($ciclos <= 10);

        $juegosTotales =  count($juegosG);

        $porcentajeTotal = round(($juegosCirculo * 100) / $juegosTotales,2);

        return $porcentajeTotal;
    }

} 



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:0
/*     
 array: $juegosGuardados, 
 float:
 entero: $opcion, $masChico, $masGrande, $juegoNumero,                           //PREGUNTAR:tipo de dato de $opcion
 flag:
 string: $nombreUsuario, 
 //Inicialización de variables:
   

*/
//Proceso:

//$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

$juegosGuardados = cargarJuegos();


do {
    $opcion = seleccionarOpcion();

    
    switch ($opcion) {
        case 1:

            

            break;
        case 2: 
            // solicitar un numero entre un minimo y un maximo de numeros
            if (count($juegosGuardados) > 0) {
                $masChico = 0;
                $masGrande = (count($juegosGuardados) - 2);
                $juegoNumero = rangoValores($masChico, $masGrande);
                // si el numero esta entre los numeros solicitados 
                //accedera a mostrar el juego solicitado
                 mostrarJuego($juegoNumero, $juegosGuardados);
             
                 // si el numero no esta en el ranking solicitado marcara error 
                 // y pedira otro numero 
            } else {
                echo "numeroJuego de juego no existe.\n";
                echo "errorrr.\n";
            }

            break;
        case 3: 
            echo "Ingrese el nombre del jugador: ";
            $nombreUsuario = strtoupper(trim(fgets(STDIN)));=
            $primerGanador = primerJuegoGanado ($coleccionJuegos, $nameJugador) {
            echo "\n".$;$primerGanador;\n
            break;
        
              case 4: 
            echo "Ingrese un símbolo: ";
            $simbolo = strtoupper(trim(fgets(STDIN)));
            $porcentajeCirculo = porcentaje($simbolo);
            echo "\n".$porcentajeCirculo."\n";
            
      case 5: 

            echo "laasfa264226442662sfasfasflalla";
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
    
            break;
        
      case 6: 
            // muestra juegos ordenados del jugador O alfabeticamente
            // 
              juegosDeOalfabeticamente ($juegosGuardados);
        
              break;
      
      case 7: 

              echo "juego finalizado";
                        //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            
              break;
    
        
}
            
            


    
} while ($opcion <> 7);