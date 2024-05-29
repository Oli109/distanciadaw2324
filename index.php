<?php
/**
 * practica-cabeza.php
 * Este script PHP implementa una calculadora simple con funciones para realizar operaciones de suma y resta.
 * @package Calculadora
 * @autor Juan Antonio Cabeza Guisado
 * @version 1.0
 */
/**
 * Suma dos números.
 * Esta función recibe dos números como parámetros y devuelve la suma de ambos.
 * @param float $a El primer número a sumar.
 * @param float $b El segundo número a sumar.
 * @return float La suma de los dos números.
 * @since 1.0
 */
function sumar($a, $b) {
    return $a + $b;
}
/**
 * Resta dos números.
 * Esta función recibe dos números como parámetros y devuelve la diferencia entre el primero y el segundo.
 * @param float $a El número del cual se restará el segundo número.
 * @param float $b El número que se restará del primer número.
 * @return float La diferencia entre los dos números.
 * @since 1.0
 */
function restar($a, $b) {
    return $a - $b;
}
// Ejemplos de uso de las funciones
echo "Suma de 5 y 3: " . sumar(5, 3) . "\n"; // Salida: 8
echo "Resta de 5 y 3: " . restar(5, 3) . "\n"; // Salida: 2
/**
 * @internal Este es un comentario interno que solo debería ser visible en la documentación para desarrolladores.
 */
?>