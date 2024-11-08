<?php

// Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

// Load the Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle environment variables (for SQLite configuration)
if (!file_exists(__DIR__ . '/../database/database.sqlite')) {
    touch(__DIR__ . '/../database/database.sqlite');  // Ensure SQLite database file exists
}

// Set up Laravel's Kernel and handle incoming requests
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Send the response back to the client
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
