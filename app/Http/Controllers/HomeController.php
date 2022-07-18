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

        $cLatacunga = Socio::where('soc_direccion', 'Latacunga')->count();
        $cQuito = Socio::where('soc_direccion', 'Quito')->count();
        $cAmbato = Socio::where('soc_direccion', 'Ambato')->count();
        $cQuevedo = Socio::where('soc_direccion', 'Quevedo')->count();
        $cSalcedo = Socio::where('soc_direccion', 'Salcedo')->count();

        $Valor1 = Pelicula::where('pel_costo', '2.50')->count();
        $Valor2 = Pelicula::where('pel_costo', '3.00')->count();
        $Valor3 = Pelicula::where('pel_costo', '3.25')->count();
        $Valor4 = Pelicula::where('pel_costo', '3.50')->count();
        $Valor5 = Pelicula::where('pel_costo', '4.00')->count();
        $Valor6 = Pelicula::where('pel_costo', '4.50')->count();


        return view(
            'admin.dashboard',
            [
                'c_peliculas' => $c_peliculas,
                'c_alquilers' => $c_alquilers,
                'c_socios' => $c_socios,
                'c_generos' => $c_generos,
                'c_formatos' => $c_formatos,
                'cLatacunga' => $cLatacunga,
                'cQuito' => $cQuito,
                'cAmbato' => $cAmbato,
                'cQuevedo' => $cQuevedo,
                'cSalcedo' => $cSalcedo,
                'Valor1' => $Valor1,
                'Valor2' => $Valor2,
                'Valor3' => $Valor3,
                'Valor4' => $Valor4,
                'Valor5' => $Valor5,
                'Valor6' => $Valor6
            ]
        );
    }

    public function reporte1()
    {
        $peliculas = Pelicula::all();
        return view('admin.reporte1',compact('peliculas'));
    }

    public function reporte2()
    {
        $socios = Socio::all();
        return view('admin.reporte2',compact('socios'));
    }

    public function reporte3()
    {
        $alquilers = Alquiler::all();
        return view('admin.reporte3',compact('alquilers'));
    }

    public function reporte4()
    {
        $peliculas = Pelicula::all();
        return view('admin.reporte4',compact('peliculas'));
    }

    public function reporte5()
    {
        $alquilers = Alquiler::all();
        return view('admin.reporte5',compact('alquilers'));
    }
}
