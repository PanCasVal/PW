<?php

namespace App\Http\Controllers;

use App\Models\Exa;
use Illuminate\Http\Request;

class ExaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exas=Exa::all();
        return view("exas.index", compact('exas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "hola desde exa";
        return view("exas.create");
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
        //return "Hola";

        $a = $request['sueldo'];
        $b = $request['dias'];
        $c = $a*$b;
        $d = $c-($c*.16); 
        //echo $c."<br>";
        //echo $d;

        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'ap_p' => 'required',
            'ap_m' => 'required',
            'area' => 'required',
            'sueldo' => 'required',
            'dias' => 'required',
            //'total_n' => $c,
            //'total_b' => $d,
        ]);
        $request['total_n']=$c;
        $request['total_b']=$d;
        Exa::create($request->all());

        return redirect()->route('exas.index')
            ->with('success', 'Resgistro exitoso!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exa  $exa
     * @return \Illuminate\Http\Response
     */
    public function show(Exa $exa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exa  $exa
     * @return \Illuminate\Http\Response
     */
    public function edit(Exa $exa)
    {
        //return "hola";
        return view("exas.edit", compact('exa'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exa  $exa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exa $exa)
    {

        //return "hola";
        
        $a = $request['sueldo'];
        $b = $request['dias'];
        $c = $a*$b;
        $d = $c-($c*.16); 
        //echo $c."<br>";
        //echo $d;

        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'ap_p' => 'required',
            'ap_m' => 'required',
            'area' => 'required',
            'sueldo' => 'required',
            'dias' => 'required',
            //'total_n' => $c,
            //'total_b' => $d,
        ]);
        $request['total_n']=$c;
        $request['total_b']=$d;

        $exa->update($request->all());
        return redirect()->route('exas.index')
            ->with('success', 'Actualización exitosa!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exa  $exa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exa $exa)
    {
        $exa->delete();
        return redirect()->route("exas.index")->with("success","Empleado eliminado corectamente");
        //
    }
}
