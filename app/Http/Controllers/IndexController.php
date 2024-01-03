<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaterperformances;

class IndexController extends Controller
{
    public function index() {

        
        $teaterperformances = Teaterperformances::all();

        
        $totalPerformances = count($teaterperformances);
        $numberOfPerformances = 2;
        $startIndex = $totalPerformances - $numberOfPerformances;
        $latestPerformances = [];
        
        for ($i = $startIndex; $i < $totalPerformances; $i++) {
            $latestPerformances[] = $teaterperformances[$i];
        }

        // Return the view with loaded data
        return view('index.index', compact('latestPerformances'));
    }
}
