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
    public function select(Request $request){
        try
        {
            switch ($request->type) {
                case 1:
                $data= Education_type::where('education_id',$request->id)
                ->orderBy("name")
                ->get();
                return response(json_encode($data), 200)->header('Content-Type', 'text/json');
                    break;
                case 2:
                    $data= DB::table('municipios')->where('departamento_id',$request->id)
                    ->orderBy("municipio")
                    ->get();
                    return response(json_encode($data), 200)->header('Content-Type', 'text/json');
                    break;

            }

        }catch (Exception $e) {
            return " Error: " . $e->getMessage();
        }

    }
}
