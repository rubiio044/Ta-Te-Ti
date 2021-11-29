<?php

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