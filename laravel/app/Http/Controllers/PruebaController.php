<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class PruebaController extends Controller
{
	public function index(){
		return "Hola desde Index";
	}

	public function nombre($nombre){
		return "Hola mi nombre es: ".$nombre;
	}
}
