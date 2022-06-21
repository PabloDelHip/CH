<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ToursController extends Controller {
	
	public function __construct() {
        $this->API_HOST = env('API_HOST');
     }

	public function getTourCategorie($categorie,$id_categorie) {
		$dataTours = json_decode( file_get_contents($this->API_HOST.'/api/v1/tours/get/categorie/'.$id_categorie), true );
		$dataTours = $dataTours["data"];
		//dd($dataTours);

		$categorie = str_replace('-', ' ', $categorie);
		return view('tours_categorie',compact('dataTours', 'categorie'));
	}
}