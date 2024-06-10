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

// Add more array-related functions here
?>
