<?php
// File handling functions

/**
 * Reads a file and returns its contents.
 *
 * @param string $filename
 * @return string
 */
function readFileContents($filename) {
    return file_get_contents($filename);
}

/**
 * Writes content to a file.
 *
 * @param string $filename
 * @param string $content
 * @return bool
 */
function writeFileContents($filename, $content) {
    return file_put_contents($filename, $content);
}

/**
 * Appends content to a file.
 *
 * @param string $filename
 * @param string $content
 * @return bool
 */
function appendToFile($filename, $content) {
    return file_put_contents($filename, $content, FILE_APPEND);
}

// Add more file-related functions here
?>
