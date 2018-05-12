<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{

	private $peliculas = [
		1 => "Toy Story",
		2 => "Buscando a Nemo",
		3 => "Avatar",
		4 => "Star Wars: Episodio V",
		5 => "Up",
		6 => "Mary and Max"
	];


	public function buscarPeliculaId($id)
	{
		if(array_key_exists($id, $this->peliculas)){
			return $peliculas[$id];
		}
		else{
			return "ID inválido.";
		}
	}

	public function buscarPeliculaNombre($nombre)
	{
		foreach ($this->peliculas as $id => $nombrePelicula) {
			if(strtolower($nombre) == strtolower($nombrePelicula)) return "ID: " . $id . " - Nombre película: " . $nombrePelicula;
		}

		return "No se encontraron coincidencias";
	}

	public function getPeliculas()
	{
		return view('peliculas')->with('peliculas', $this->peliculas);
	}
}
