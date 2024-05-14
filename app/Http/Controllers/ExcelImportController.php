<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        return redirect('/')->with('success', 'Users imported successfully.');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'nom' => 'nullable|string',
            'codepostal' => 'nullable|string',
            'localite' => 'nullable|string',
        ]);

        if (empty($request->nom) && empty($request->codepostal) && empty($request->localite)) {
            session()->forget('filtered_data');
            session()->forget('filtered_localites');
            return redirect('/');
        }

        // Commencez par construire la requête de base pour récupérer les médecins
        $query = Medecin::query();

        // Si le champ 'nom' est rempli, ajoutez une clause where pour filtrer par nom
        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->input('nom') . '%');
        }

        // Si le champ 'codepostal' est rempli, ajoutez une clause where pour filtrer par code postal
        if ($request->filled('codepostal')) {
            $query->where('codepostal', $request->input('codepostal'));
        }

        // Si le champ 'localite' est rempli, ajoutez une clause where pour filtrer par localité
        if ($request->filled('localite')) {
            $query->where('localite', $request->input('localite'));
        }

        // Exécutez la requête pour obtenir les résultats
        $data = $query->paginate(10); // Vous pouvez ajuster la pagination en fonction de vos besoins
        $data = $query->get(); // Vous pouvez ajuster la pagination en fonction de vos besoins

        $localites = Medecin::select('localite')->distinct()->pluck('localite');

    
    
        if (Route::currentRouteName() === 'submit') {
           
        Session::put('filtered_data', $data);
        Session::put('filtered_localites', $localites);
        }
        return redirect()->route('home');
    }
}
