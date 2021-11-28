<?php

/**El grupo de funciones "guardarN()" almacenan los juegos que se realizaron de forma individual. 
 * Cada funcion ejecuta el archivo tateti.php de forma independiente.
 * Una vez que la primera funcion realiza un juego salta a la segunda, y asi sucecibamente.
 * @param array $juego 
 */ 

function guardar0($juego){
    /**Ejecuta la funcion jugar() y tetorna el array $juego */
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
function guardar1($juego){
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
function guardar2($juego){
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
function guardar3($juego){
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
function guardar4($juego){
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
function guardar5($juego){
    include_once("tateti.php");
    $juego = jugar();
    return $juego;   
}
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
function primerJuego($usuario,$jugadorX0,$jugadorO0,$memoria0,$jugadorX1,$jugadorO1,$memoria1,$jugadorX2,$jugadorO2,$memoria2,$jugadorX3,$jugadorO3,$memoria3,$jugadorX4,$jugadorO4,$memoria4,$jugadorX5,$jugadorO5,$memoria5){
    //Se compara el valor tipiado con el del jugador cruz del primer juego
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
    return $primerJuego;
}
//Inicializacion de las variables.{
    //Variable contadora de partidas jugadas.
    $partida = 0;
    //Variable que ejecuta la funcion "juego()" del archivo tateti.php
    $juego = [];
    //Variables que almacenan los juegos registrados.
    $memoria0 = [];
    $memoria1 = [];
    $memoria2 = [];
    $memoria3 = [];
    $memoria4 = [];
    $memoria5 = [];
    //Variables que toman el valor de "$jugadorCruz" y "$jugadorCirculo" para cada juego almacenado. 
    $jugadorX0 = "";
    $jugadorO0 = "";
    $jugadorX1 = "";
    $jugadorO1 = "";
    $jugadorX2 = "";
    $jugadorO2 = "";
    $jugadorX3 = "";
    $jugadorO3 = "";
    $jugadorX4 = "";
    $jugadorO4 = "";
    $jugadorX5 = "";
    $jugadorO5 = "";
//}
/**Este apartado ejecuta el juego para cada funcion "guardadoN"
 * @param int $partida
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
 */
 do {
    $partida = $partida + 1;

    //**Las variables "memoriaN" son arrays asociativos que ejecutan su respectiva funcion "guardarN" y almacena un juego realizado */
    if ($partida == 1) {
        //Cuando "$partida = 1" el archivo tateti.php se ejecuta para la funcion guardar0()
        $memoria0 = guardar0($juego);
        //La accion "current()" devuelve la clave del valor del array que está siendo apuntado por el puntero interno. 
        $jugadorX0 = current($memoria0);
        $jugadorO0 = next($memoria0);
        $jugadorO0 = current($memoria0);
        /**La accion "next()" desplaza al puntero al la clave del segundo elemento, 
         * esto es para almacenar la clave del array como un valor en una variable*/
    }elseif ($partida == 2) {
        $memoria1 = guardar1($juego);

        $jugadorX1 = current($memoria1);
        $jugadorO1 = next($memoria1);
        $jugadorO1 = current($memoria1);

    }elseif ($partida == 3) {
        $memoria2 = guardar2($juego);

        $jugadorX2 = current($memoria2);
        $jugadorO2 = next($memoria2);
        $jugadorO2 = current($memoria2);

    }elseif ($partida == 4) {
        $memoria3 = guardar3($juego);
        
        $jugadorX3 = current($memoria3);
        $jugadorO3 = next($memoria3);
        $jugadorO3 = current($memoria3);

    }elseif ($partida == 5) {
        $memoria4 = guardar4($juego);

        $jugadorX4 = current($memoria4);
        $jugadorO4 = next($memoria4);
        $jugadorO4 = current($memoria4);

    }elseif ($partida == 6) {
        $memoria5 = guardar5($juego);

        $jugadorX5 = current($memoria5);
        $jugadorO5 = next($memoria5);
        $jugadorO5 = current($memoria5);
    }
    //***El repetidor debe ir dentro de la cacilla "Jugar(1)" para que el resto del programa funciones***

    echo "Volver a jugar?(s/n): ";
    $sn = trim(fgets(STDIN)); 
    
} while ($sn == "s");
//Programa principal de "primerJuegoGanado()".
echo "Ingrese el nombre del jugador: ";
$usuario = strtoupper(trim(fgets(STDIN)));
$primerJuegoGanado = primerJuego($usuario,$jugadorX0,$jugadorO0,$memoria0,$jugadorX1,$jugadorO1,$memoria1,$jugadorX2,$jugadorO2,$memoria2,$jugadorX3,$jugadorO3,$memoria3,$jugadorX4,$jugadorO4,$memoria4,$jugadorX5,$jugadorO5,$memoria5);
echo "\n".$primerJuegoGanado."\n";