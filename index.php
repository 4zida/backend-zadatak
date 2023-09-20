<?php
require_once 'Models/FourWallsModel.php';
require_once 'Controllers/SearchController.php';

$model = new FourWallsModel('data.json');

$controller = new SearchController($model);

$filters = array(
	'for' => 'sale',
	'm2From' => 30,
	'm2To' => 50,
	'priceFrom' => 33000,
	'priceTo' => 100000,
);

$controller->search($filters);