<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Devis;
use App\Models\Reseau;
use App\Models\StatutJuridique;
use Illuminate\Http\Request;
use Validator;

class BaseController extends Controller
{
    public function reseau() {
        $data = Reseau::get();

        return parent::return_success(compact('data'));
    }

    public function statutJuridique() {
        $data = StatutJuridique::get();

        return parent::return(compact('data'));
    }

     public function submitReseau(Request $request) {

        $validator = Validator::make($request->all(), [
			'reseau' => 'required',
            'statut_juridique' => 'required'
		]);

		if($validator->fails()){
			return parent::return(['Missing parameter(s)'],400);
		}

        $row = new Devis();
        $row->reseau = json_decode($request->reseau);
        $row->statut_juridique = $request->statut_juridique;

        $row->save();

        return parent::return(compact('data'));
    }
}
