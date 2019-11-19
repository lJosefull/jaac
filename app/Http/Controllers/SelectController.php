<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Education_type;
use Swift;
use Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Validator;

class SelectController extends Controller
{
    public function select(Request $request)
    {
        try {

            switch ($request->type) {
                case 1:
                    if ($request->id == null) {
                        $data = Education_type::orderBy("name")->get();
                    } else {
                        $data = Education_type::where('education_id', $request->id)
                            ->orderBy("name")
                            ->get();
                    }

                    return response(json_encode($data), 200)->header('Content-Type', 'text/json');
                    break;
                case 2:
                    if ($request->id == null) {
                        $data = DB::table('municipios')->orderBy("municipio")->get();
                    } else {
                        $data = DB::table('municipios')->where('departamento_id', $request->id)
                            ->orderBy("municipio")
                            ->get();
                    }
                    return response(json_encode($data), 200)->header('Content-Type', 'text/json');
                    break;
            }
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }

    public function search(Request $request)
    {
        try {
            $query = User::query();

            $query->when(request('title') != null, function ($q) {
                return $q->where('education_type', request('title'));
            });
            $query->when(request('state') != null, function ($q) {
                return $q->where('state_id', request('state'));
            });

            $query->when(request('city') != null, function ($q) {
                return $q->where('city_id', request('city'));
            });

            $query->when(request('educacion') != null, function ($q) {
                return $q->where('education_id', request('educacion'));
            });


            $query = $query->get();


            return response(json_encode($query), 200)->header('Content-Type', 'text/json');
        } catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }
    }
}
