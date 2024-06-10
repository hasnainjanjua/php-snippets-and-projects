<?php
// String functions

/**
 * Converts a string to uppercase.
 *
 * @param string $string
 * @return string
 */
function toUpperCase($string) {
    return strtoupper($string);
}

/**
 * Converts a string to lowercase.
 *
 * @param string $string
 * @return string
 */
function toLowerCase($string) {
    return strtolower($string);
}

/**
 * Capitalizes the first letter of each word in a string.
 *
 * @param string $string
 * @return string
 */
function capitalizeWords($string) {
    return ucwords($string);
}

// Add more string-related functions here
?>
