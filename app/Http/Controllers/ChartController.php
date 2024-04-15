<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function index() {

        return view('charts.index');
    }
    public function charts(Request $request) {
        $requestData = $request->all();
        switch($requestData['chart']){
            case '1' :
                return view('charts.chart1');
            case '2' :
                return view('charts.chart2');
            case '3' :
                return view('charts.chart3');
            case '4' :
                return view('charts.chart4');
            case '5' :
                return view('charts.chart5');
        }   
    }
    
}
