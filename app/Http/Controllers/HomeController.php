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

class HomeController extends Controller
{

    public function index()
    {
        $municipios = DB::table('municipios')
        ->orderBy("municipio")
        ->get();
        $departamentos = DB::table('departamentos')
        ->orderBy("departamento")
        ->get();

        $educacions=Education::all();
        $tipo_educacions=Education_type::all();

        return view('welcome',[
            'municipios'=>$municipios,
            'departamentos'=>$departamentos,
            'educacions'=>$educacions,
            'tipo_educacions'=>$tipo_educacions

        ]);
    }
}
