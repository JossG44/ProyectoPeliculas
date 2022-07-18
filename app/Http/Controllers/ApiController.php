<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Alquiler;
use App\Models\Socio;
use App\Models\Director;
use App\Models\Genero;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPeliculas()
    {
        $peliculas = Pelicula::all();
        return $peliculas;
    }

    public function indexAlquilers()
    {
        $alquilers = Alquiler::all();
        return $alquilers;
    }

    public function indexSocios()
    {
        $socios = Socio::all();
        return $socios;
    }

    public function indexDirectors()
    {
        $directors = Director::all();
        return $directors;
    }

    public function indexGeneros()
    {
        $generos = Genero::all();
        return $generos;
    }
    
}
