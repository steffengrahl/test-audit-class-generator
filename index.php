<?php

require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Pfad zu den Templates
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, [
    'cache' => false, // Für Entwicklung deaktiviert
    'debug' => true,
]);

// Daten für das Template
$data = [
    'greeting' => 'Hallo aus dem Twig PHP Projekt!',
    'features' => [
        'Twig Template Engine',
        'Mehrere Unterordner für Templates',
        'Composer für Dependency Management',
        'Docker-basierte PHP 8.0 Umgebung'
    ]
];

// Template aus dem Unterordner 'content' rendern
echo $twig->render('content/home.twig', $data);
