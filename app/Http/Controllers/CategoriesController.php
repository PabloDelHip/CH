<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CategoriesController extends Controller {
	
	public function __construct() {
        $this->API_HOST = env('API_HOST');
     }

	public function getCategories() {
		$dataCategoriesTours = json_decode( file_get_contents($this->API_HOST.'/api/v1/categorie-tours/get/categories'), true );
		$dataCategoriesTours = $dataCategoriesTours["categories"];

		return view('tours_actividades',compact('dataCategoriesTours'));
	}
}