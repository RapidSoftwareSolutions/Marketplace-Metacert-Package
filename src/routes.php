<?php
$routes = [
    'metadata',
    'analyzeUrl'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

