<?php
require 'db.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

switch ($method) {
    case 'GET':
        handleGetRequest($request);
        break;
    case 'POST':
        handlePostRequest($request);
        break;
    case 'PUT':
        handlePutRequest($request);
        break;
    case 'DELETE':
        handleDeleteRequest($request);
        break;
    default:
        echo json_encode(['error' => 'Invalid request method']);
        break;
}

function handleGetRequest($request) {
    // Handle GET request logic here
}

function handlePostRequest($request) {
    // Handle POST request logic here
}

function handlePutRequest($request) {
    // Handle PUT request logic here
}

function handleDeleteRequest($request) {
    // Handle DELETE request logic here
}
?>
