<?php

namespace App\Http\Controllers;

use App\Charts\ExampleChart;
use App\Nacionalidades;
use Illuminate\Http\Request;

class GraficarController extends Controller
{

    public function graficarPersonas(){

        $nacionalidades=Nacionalidades::all();
        $labels_nacionalidad=array();
        $valores_nacionalidad=array();
        foreach ($nacionalidades as $nacionalidad)
        {
            //dd($nacionalidad->getPersonas());
            array_push($labels_nacionalidad,$nacionalidad->nom_na);
            array_push($valores_nacionalidad,$nacionalidad->getPersonas());
        }

        $chart = new ExampleChart();
        $chart->labels($labels_nacionalidad);
        $chart->dataset('Nacionalidades', 'line', $valores_nacionalidad);
        return view("chart",compact('chart'));

        //      php artisan make:chart ExampleChart Chartjs

    }
}
