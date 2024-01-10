<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaterperformances;

class IndexController extends Controller
{
    public function index()
    {
        // Вземане на всички постановки, подредени по дата във възходящ ред (от най-близката към най-далечната)
        $teaterperformances = Teaterperformances::orderBy('date')->get();

        // Връщане на изгледа със заредените данни
        return view('index.index', compact('teaterperformances'));
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns($this->getFieldsData(true));

        // Add any additional columns or configurations specific to the List operation.
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
    
        $teaterperformances = Teaterperformances::where('venue', 'like', "%$searchTerm%")
            ->orWhere('name', 'like', "%$searchTerm%")
            ->orderBy('date')
            ->get();
    
        return view('index.search_results', compact('teaterperformances'));
    }
}
