<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

       return Nota::where('user_id',auth()->id())->get(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             /* $request->validate([
            'description' => 'required',
            'asignatura' => 'required',
            'nota' => 'required'
            ]);  */
            
            $nota = new Nota();
            $nota->nombre = $request->nombre;
            $nota->user_id = auth()->id();
            $nota->asignatura = $request->asignatura;
            $nota->nota= $request->nota;
            $nota->save();
            
            return $nota;
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
            $nota = Nota::find($id);
            $nota->nombre = $request->nombre;
            $nota->asignatura = $request->asignatura;
            $nota->nota = $request->nota;
            $nota->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = Nota::find($id);
        $nota->delete();
    }
}
