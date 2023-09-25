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
		//Pozvati metodu search iz modela i vratiti rezultate
		//Dekorisati rezultate i vratiti ih u json formatu
		}
	}