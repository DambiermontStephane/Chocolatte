<?php

require_once('config.php');

// Charger toutes les dépendances de code

$controller = new HomeController();

$controller->handle();