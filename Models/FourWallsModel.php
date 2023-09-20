<?php

class FourWallsModel
	{
	private $data;

	//Prvi korak u modelu je da se napravi konstruktor koji će da učita podatke iz json fajla i smesti ih u $data

	public function search($filters)
		{
		$results = [];

		//implementirati pretragu
		// u index.php se nalazi primer poziva ove funkcije, potrebno filtrirati $data i vratiti rezultate

		return $results;
		}
	}