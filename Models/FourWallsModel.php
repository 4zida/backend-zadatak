<?php

class FourWallsModel
	{
	private $data;

	public function __construct($dataFilePath)
		{
		$this->data = json_decode(file_get_contents($dataFilePath), true);
		}

	public function search($filters)
		{
		$results = [];
		foreach ($this->data as $ad)
			{
			$match = true;

			if (isset($filters['for']) && $ad['for'] !== $filters['for'])
				{
				$match = false;
				}
			if (isset($filters['m2From']) && $ad['m2'] < $filters['m2From'])
				{
				$match = false;
				}

			if (isset($filters['m2To']) && $ad['m2'] > $filters['m2To'])
				{
				$match = false;
				}

			if (isset($filters['priceFrom']) && $ad['price'] < $filters['priceFrom'])
				{
				$match = false;
				}

			if (isset($filters['priceTo']) && $ad['price'] > $filters['priceTo'])
				{
				$match = false;
				}

			if ($match)
				{
				$results[] = $ad;
				}
			}

		return $results;
		}
	}