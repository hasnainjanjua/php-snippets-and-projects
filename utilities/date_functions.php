<?php
// Date functions

/**
 * Formats a date.
 *
 * @param string $date
 * @param string $format
 * @return string
 */
function formatDate($date, $format = 'Y-m-d') {
    return date($format, strtotime($date));
}

/**
 * Returns the current date and time.
 *
 * @return string
 */
function getCurrentDateTime() {
    return date('Y-m-d H:i:s');
}

/**
 * Adds days to a date.
 *
 * @param string $date
 * @param int $days
 * @return string
 */
function addDaysToDate($date, $days) {
    return date('Y-m-d', strtotime("$date +$days days"));
}

// Add more date-related functions here
?>
