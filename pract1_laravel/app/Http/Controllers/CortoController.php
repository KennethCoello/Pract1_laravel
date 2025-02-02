<?php

namespace App\Http\Controllers;
use App\Models\Corto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class CortoController extends Controller
{   
     //Array de los cortos//
     private array $cortos = [
        [
        'id' => 1, 'titulo' => 'Teoría de PHP para dormir', 'director' => 'Ricardo',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
        'id' => 2, 'titulo' => 'React para dummies', 'director' => 'Dani',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
        'id' => 3, 'titulo' => 'Despliegue con Docker', 'director' => 'Alex',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
        'id' => 4, 'titulo' => 'Interfaces gráficas con Java', 'director' => 'Ginés',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
        'id' => 5, 'titulo' => 'MariaDB', 'director' => 'Gonzalo',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]
    ];

    //Metodo para obtener array de cortos//
    public function obtenerCortos(): array{
        return $this->cortos;
    }

    /*Metodos para lógica*/
    public function index(){
        //Acceder a los datos del array//
        $cortos = $this->obtenerCortos();
        /* Esto es para la base de datos
        $cortos = Corto::get();
        */
        /*Aqui filtro con where en la base de datos para coger solo los datos de ricardo
        $cortos = Corto::where('director', '=', 'Ricardo')->get();
        */
        return view('cortos.listado',compact('cortos'));
    }

    //Me queda hacer show//
    public function show(int $id){
        $cortos = $this->obtenerCortos();
        $ide= collect($cortos)->firstWhere('id', $id);
        
        /*Base de datos
        $corto =  Corto::find($id);
        */
        return view('cortos.individual',compact('ide'));
    } 

}
