<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Swift;
use App\User;
use Illuminate\Support\Facades\Validator;
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
        return view('auth.profile.profile');
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


                    return "seguardo";
                }else
                {
                 return redirect()->back()->with('flas_message_erros','contraseña no son iguales');
                }
                break;

                case 2:
                $validator = Validator::make($request->all(),[

                    'Business_name'=>'required|string',
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
                  $user->name=$request->Business_name;
                  $user->business_name=$request->Business_name;
                  $user->email=$request->Email;
                  $user->password=bcrypt($request->Password);
                  $user->profile_type=2;
                  $user->cb_roles_id=0;
                  $user->role='business';

                  $user->save();
                  auth()->login($user);
                  return "seguardo la empresa";
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
        //
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
        //
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
