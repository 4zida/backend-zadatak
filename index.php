<?php
require_once 'Models/FourWallsModel.php';
require_once 'Controllers/SearchController.php';

$model = new FourWallsModel('data.json');

$controller = new SearchController($model);

// napraviti filter pretrage po sledećim kriterijumima:
// 1. da je za prodaju (hint for = sale)
// 2. da je cena između 33000 i 100000
// 3. da je površina između 30 i 50
$filters = [];

$controller->search($filters);