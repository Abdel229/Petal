<?php

namespace App\Http\Controllers;


use App\Models\formation;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = formation::all();
        return view('formation', compact('formations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return(view('create-formation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validation
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);
        // insertion dans la bb
        $formation=new formation;
        $formation->title=$request->title;
        $formation->content=$request->content;
        $formation->date=$request->date;
        $formation->price=$request->price;
        $formation->save();
        return (view('create-formation',compact(TRUE)));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(formation $formation)
    {
        $formation = formation::find($formation);


        return view('show-formation', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(formation $formation)
    {
        $formation=formation::findOrFail($formation);
        return view('update-formation',compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formation $formation)
    {
        $formation=formation::findOrFail($formation);
        $formation->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'price'=>$request->title,
            'date'=>$request->title,
        ]);
        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(formation $formation)
    {
        $Toformation=formation::findOrFail($formation);
        $Toformation->delete($formation);
        return view('admin');
    }
}
