<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Montiel, María Alejandra- Legajo 3086 - TUDW- maria.montiel@est.fi.uncom.edu.ar- alemontielnqn*/





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/**
 * esta funcion pide un juego y lo muestra
 * @param int $numeroJuegoCargado
 * @param array $juegos
 * @return vacio
 */
function mostrarJuego ($numeroJuego, $juegos) {
    
    if ($juegos[$numeroJuego]["puntosCruz"] > $juegos[$numeroJuego]["puntosCirculo"]) {
      
        echo "####################################\n";
        echo "Juego TATETI: " .$numeroJuego. " (GANO X)  \n";
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
 * esta funcion pide un numero entre un minimo y un maximo
 * si el numero ingresado es mayor o menor a ese rango debera volver a  ingresar otro numero
 *@param int $minimo
 *@param int $maximo
 *@return int
 */
function numerosrankiados ($minimo, $maximo) {
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
* ver menu
* @param sin parametro de entrada
* @return string $menuPrincipal
*/
function seleccionarOpcion() {
    
    echo " MENU TATETI"."\n";
    echo "1) Jugar al tateti"."\n";
    echo "2) Mostrar un juego"."\n";
    echo "3) Mostrar el primer juego ganador"."\n";
    echo "4) Mostrar porcentaje de Juegos ganados"."\n";
    echo "5) Mostrar resumen de Jugador"."\n";
    echo "6) Mostrar listado de juegos ordenado por jugador O"."\n";
    echo "7) Salir"."\n";
    
    //  pones un numeroJuego de 1 hasta 7 algo va hacer  
    // else te va pedir que ingreses otra opcion
    // hasta que pongas una opcion valida
    echo "Ingrese la opción del menu: ";
    $menuPrincipal = trim(fgets(STDIN));


    if  ( !($menuPrincipal>=1 && $menuPrincipal<=7) ){
        echo "error"."\n";
        echo "Vuelva a ingresar un  número valido: ";
        $menuPrincipal = trim(fgets(STDIN));
    }
    
        return ($menuPrincipal); 
    
    }


/**
 * Módulo crea una estructura de datos pra almacenar juegos 
 * @param 
 * @return array
 */
function cargarJuegos() {

     
    // creo que hay una funcion con el mismo nombre verificar y cambiar en el caso de que si este
    $juegos[0] = [ 
        'jugadorCruz' => 'jorge',
        'jugadorCirculo' => 'juan',
        'puntosCruz' => '2',
        'puntosCirculo' => '0',
        
    ];

    $juegos[1] = [ 
        'jugadorCruz' => 'facundo',
        'jugadorCirculo' => 'alejandra',
        'puntosCruz' => '0',
        'puntosCirculo' => '4',
        

    ];

    $juegos[2] = [ 
        'jugadorCruz' => 'juan ',
        'jugadorCirculo' => 'facundo',
        'puntosCruz' => '1',
        'puntosCirculo' => '1',
        
    ];

    $juegos[3] = [ 
        'jugadorCruz' => 'jorge',
        'jugadorCirculo' => 'hector',
        'puntosCruz' => '1',
        'puntosCirculo' => '1',
       
    ];

    $juegos[4] = [ 
        'jugadorCruz' => 'facundo',
        'jugadorCirculo' => 'hector',
        'puntosCruz' => '2',
        'puntosCirculo' => '0',
        
    ];

    $juegos[5] = [ 
        'jugadorCruz' => 'alejandra',
        'jugadorCirculo' => 'jorge',
        'puntosCruz' => '0',
        'puntosCirculo' => '5',
        
        
    ];

    $juegos[6] = [ 
        'jugadorCruz' => 'hector',
        'jugadorCirculo' => 'alejandra',
        'puntosCruz' => '0',
        'puntosCirculo' => '3',
        
    ];

    $juegos[7] = [ 
        'jugadorCruz' => 'juan',
        'jugadorCirculo' => 'hector',
        'puntosCruz' => '1',
        'puntosCirculo' => '1',
        
    ];

    $juegos[8] = [ 
        'jugadorCruz' => 'facundo',
        'jugadorCirculo' => 'jorge',
        'puntosCruz' => '0',
        'puntosCirculo' => '3',
       
    ];

    $juegos[9] = [ 
        'jugadorCruz' => 'juan',
        'jugadorCirculo' => 'alejandra',
        'puntosCruz' => '1',
        'puntosCirculo' => '1',
   
    ];
    $juegos[10] = [ 
        'jugadorCruz' => 'juan',
        'jugadorCirculo' => 'alejandra',
        'puntosCruz' => '0',
        'puntosCirculo' => '3',
   
    ];

    return $juegos;
}





/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

$juegosGuardados = cargarJuegos();


do {
    $opcion=seleccionarOpcion();

    
    switch ($opcion) {
        case 1:

              $juegoNuevo =jugar();
             imprimirResultado($juegoNuevo);
           
           
             //guardar datos del juego en coleccionde juegos array llamdado juegos 
             //esta parte no me estaria saliendo
           
            

            break;
        case 2: 
            // solicitar un numero entre un minimo y un maximo de numeros
            if (count($juegosGuardados) > 0) {
                $masChico = 0;
                $masGrande = (count($juegosGuardados) - 2);
                $juegoNumero = numerosrankiados($masChico, $masGrande);
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
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion <> 7);
