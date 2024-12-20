<?php

namespace App\Http\Controllers;

use App\Http\dao\FraisService;
use App\Models\Frais;
use Illuminate\Http\Request;

class FraisController extends Controller
{
    public function idFrais($idFrais)
    {
        $service = new FraisService();
        $service->idFrais($idFrais);
    }

    public function ajoutFrais($idFrais, $annemois, $nbJustificatifs)
    {
        $frais = new Frais();
        $frais-> anneemois = $annemois;
        $frais-> id_frais = $idFrais;
        $frais-> nbjustificatifs = $nbJustificatifs;
        $frais->save();

        return response()->json(['status'=>'frais crée', 'data'=>$frais]);
    }

    public function modifierFrais(Request $request)
    {

    }

    public function supprimerFrais(Request $request)
    {

    }

    public function listeFrais(Request $request)
    {

    }
}
