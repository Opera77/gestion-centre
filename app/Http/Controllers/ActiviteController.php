<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Activite;
use App\Models\Candidat;
use App\Models\Categorie;
use App\Models\Odcuser;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActiviteController extends Controller
{

    public function index()
    {
        $activites = Activite::all();
        return view('activites.index', compact('activites'));
    }

    public function create()
    {

        $categories = Categorie::all();
        return view("components.form", compact("categories"));
    }

    public function store(Request $request)
    {
        $activites = Activite::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'lieu' => 'kinshasa',
            'date_debut' => $request->date_debut,
            'categorie_id' => $request->categorie_id,
            'date_fin' => $request->date_fin
        ]);

        return redirect()->route('activites.index', compact('activites'));
    }


    public function show(Activite $activite)
    {
        // Trouver l'Activite correspondant et récupérer le champ '_id'
        $id = $activite->id;
        $show = $activite;
        $activiteId = Activite::where('id', $id)->first(['_id']);
        
        // Récupérer les candidats liés à cette activité
        $candidats = Candidat::where('activite_id', $id)->get();
        $jsonPath = base_path('aws.json');
        $jsonData = json_decode(file_get_contents($jsonPath));
        $awsInfo = $jsonData->data;

        foreach ($awsInfo as $value) {
            $userId = $value->user->_id;
            $idCandidat = Odcuser::where('_id', $userId)->first(['id']);
            if($idCandidat !== null){

                Candidat::create([
                    'odcuser_id' => $idCandidat->id,
                    'activite_id' => $id, 
                    'status' => 1
                ]);
            }
        }
        $candidats = Candidat::where('activite_id', $id);
        
        return view('activites.show', compact('show', 'id', 'candidats', 'activiteId', 'awsInfo'));
    }


    public function edit(Activite $activite)
    {
        //
    }


    public function update(Request $request, Activite $activite)
    {
        $activite->update($request->all());
        return redirect()->route('activites.index')
            ->with('success', 'Activite updated successfully.');
    }

    public function destroy(Activite $activite)
    {
        $activite->delete();
        return redirect()->route('activites.index')
            ->with('success', 'Activite deleted successfully.');
    }

    public function encours()
    {
        $today = Carbon::today();
        $activites = Activite::where('startDate', '<=', $today)->where('endDate', '>=', $today)->get();
        return view('encours', compact('activites'));
    }
}
