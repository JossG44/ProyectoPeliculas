<?php

namespace App\Http\Controllers;
use App\Models\Socio;
use App\Models\Pelicula;
use App\Models\Alquiler;
use App\Models\Formato;
use App\Models\Genero;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /**Funcion de la clase Dashboard, retorna vista del dashboard.index.php */
    public function dashboard()
    {
        $c_peliculas = Pelicula::all()->count();
        $c_alquilers = Alquiler::all()->count();
        $c_socios = Socio::all()->count();
        $c_generos = Genero::all()->count();
        $c_formatos = Formato::all()->count();

        //GRAFICA AREA DE X:DIRECCION - Y:CANT SOCIOS
        $cLatacunga = Socio::where('soc_direccion','Latacunga')->count();
        $cQuito = Socio::where('soc_direccion','Quito')->count();
        $cAmbato = Socio::where('soc_direccion','Ambato')->count();
        $cQuevedo = Socio::where('soc_direccion','Quevedo')->count();
        $cSalcedo = Socio::where('soc_direccion','Salcedo')->count();

        //GRAFICA DONUT

        




        return view('admin.dashboard',
                    ['c_peliculas'=> $c_peliculas,
                     'c_alquilers'=> $c_alquilers,
                     'c_socios'=> $c_socios,
                     'c_generos'=> $c_generos,
                     'c_formatos'=> $c_formatos,
                     'cLatacunga'=> $cLatacunga,
                     'cQuito'=> $cQuito,
                     'cAmbato'=> $cAmbato,
                     'cQuevedo'=> $cQuevedo,
                     'cSalcedo'=> $cSalcedo]);
        
    }
}
