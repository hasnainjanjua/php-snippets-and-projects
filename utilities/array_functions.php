<?php
// Array functions

/**
 * Filters an array by a callback function.
 *
 * @param array $array
 * @param callable $callback
 * @return array
 */
function filterArray($array, $callback) {
    return array_filter($array, $callback);
}

/**
 * Maps an array by a callback function.
 *
 * @param array $array
 * @param callable $callback
 * @return array
 */
function mapArray($array, $callback) {
    return array_map($callback, $array);
}

/**
 * Reduces an array to a single value by a callback function.
 *
 * @param array $array
 * @param callable $callback
 * @param mixed $initial
 * @return mixed
 */
function reduceArray($array, $callback, $initial = null) {
    return array_reduce($array, $callback, $initial);
}

// Add more array-related functions here
?>
