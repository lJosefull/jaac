<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Swift;
use App\Favorite;
use App\Education;
use DB;
use App\User;
use App\Video;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use validateRequest;
class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $DB=DB::table('departamentos')->get();
            $profile=Auth::user();
            $Education=Education::all();
            $verifi=Video::where('user_id',Auth::user()->id)->count();
            $urlvideo=Video::where('user_id',Auth::user()->id)->first();
            $favorite=Favorite::where('user_id',Auth::user()->id)->get();
        return view('auth.profile.profile',[
            'Education' =>$Education,
            'verifi'=>$verifi,
            'urlvideo'=>$urlvideo,
            'profile'=>$profile,
            'favorite'=>$favorite,
            'DB'=>$DB
        ]);
        }else{
        return redirect()->route('welcome');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->isMethod('post')) {
         $type=$request->type;

            switch ($type) {
                case 1:

              $validator = Validator::make($request->all(),[
                      'First_name'=>'required|string',
                      'Last_name'=>'required|string',
                      'Email'=>'required|email',
                      'Password'=>'required',
                      'Password2'=>'required'
                       ]);


                   if ($validator->fails()) {
                  return back()
                  ->withErrors($validator)
                  ->withInput()
                  ->with('flash_message_errors','Algun problema  Paso');
                }

                if($request->Password==$request->Password2)
                {

                    $user= new User();
                    $user->name=$request->First_name." " .$request->Last_name;
                    $user->first_name=$request->First_name;
                    $user->last_name=$request->Last_name;
                    $user->email=$request->Email;
                    $user->password=bcrypt($request->Password);
                    $user->profile_type=1;
                    $user->cb_roles_id=0;
                    $user->role='user';
                    $user->save();
                    auth()->login($user);
                    return redirect('profile');


                    return "seguardo";
                }else
                {
                 return redirect()->back()->with('flas_message_erros','contraseña no son iguales');
                }
                break;

                case 2:
                $validator = Validator::make($request->all(),[

                    'business_name'=>'required|string',
                    'email'=>'required|email',
                    'Password'=>'required',
                    'Password2'=>'required'
                     ]);

                 if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput()
                ->with('flash_message_errors','Algun problema  Paso');
              }

              if($request->Password==$request->Password2)
              {
                  $user= new User();
                  $user->name=$request->business_name;
                  $user->business_name=$request->business_name;
                  $user->email=$request->email;
                  $user->password=bcrypt($request->password);
                  $user->profile_type=2;
                  $user->cb_roles_id=0;
                  $user->role='business';

                  $user->save();
                  Auth()->login($user);
                  return redirect('/home');
              }else
              {
               return redirect()->back()->with('flas_message_erros','contraseña no son iguales');
              }

              break;
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()){
            try{
           $user = User::find($id);

           $departamento= DB::table('departamentos')->where('id_departamento',$user->state_id)->first();

           $municipio= DB::table('municipios')->where('id_municipio',$user->city_id)->first();
           $userbussine=Auth::user()->id;
           $favorite = new Favorite();
           $favorite->user_id=$id;
           $favorite->business_id=$userbussine;
           $verifi=Video::where('user_id',$id)->count();
           $uservideo=Video::where('user_id',$id)->first();
           $favorite->save();

           return view('profile',
           [
              'user'=>$user,
              'verifi'=>$verifi,
              'uservideo'=>$uservideo,
              'departamentos'=>$departamento,
              'municipios'=>$municipio
          ]);
         }catch (Exception $e) {
         return " Error: " . $e->getMessage();
            }
        }else{
        return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(),[

            'educacion'=>'required|string',
            'titulo'=>'required',
            'edad'=>'required',
            'sexo'=>'required',
            'departamentos'=>'required',
            'city'=>'required',
            'tel'=>'required',
            'complet'=>'required'
             ]);

         if ($validator->fails()) {
        return back()
        ->withErrors($validator)
        ->withInput()
        ->with('flash_message_errors','Algun problema  Paso');
      }
       $user= User::find(Auth::user()->id);
       $user->education_id=$request->educacion;
       $user->education_type_id=$request->titulo;
       $user->age=$request->edad;
       $user->type_sex=$request->sexo;
       $user->city_id=$request->city;
       $user->state_id=$request->departamentos;
       $user->complet=$request->complet;
       $user->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
