<?php

class SearchController
	{
	private $model;

	public function __construct($model)
		{
		$this->model = $model;
		}

	public function search($filters)
		{
		$results = $this->model->search($filters);

		var_dump($results);
//		include 'Views/fourwalls_view.php';
		}
	}