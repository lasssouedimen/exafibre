<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\parametre;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $find=0;
    if(DB::table('parametres')->count() === 0){
        $find=0;
    } else {
        $find=1; 
    }
    $parameters = parametre::all();
    return view('parameters.parameter',compact('parameters','find'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    $logoName='';
    //enregistrer img dans le dossier public/images
    if($file = $request->hasFile('logo')){
        $logoName= time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images'),$logoName);
    }
    $request = array_merge($request->except('logo'),['logo'=>$logoName]);
    parametre::create($request); 

    return redirect()->route('parameters.parameter'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(parametre $parametre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, parametre $parameter)
    {
        $parameter = parametre::find($id);
        $logoName="";
        if($file = $request->hasFile('logo')){
          $logoName= time().'.'.$request->logo->extension();
          $request->logo->move(public_path('images'),$logoName);
          $request = array_merge($request->except('logo'),['logo'=>$logoName]);
          $parameter->update($request);
        }else{
            $parameter->update($request->except('logo'));
        }
        return redirect()->route('parameters.parameter'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(parametre $parametre)
    {
        //
    }
}


