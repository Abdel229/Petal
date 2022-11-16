<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\formations;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = formations::with('categorie')->get();
        // dd($formations[1]->categorie->nom);
        return Inertia::render('formations/formation', [
            'formations' => $formations
        ]);
        // Inertia::share('formations', $formations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return (view('admin.create-formation'));
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
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'date' => 'required'
        ]);
        // insertion dans la bb
        $formation = new formations;
        $formation->title = $request->title;
        $formation->content = $request->content;
        $formation->date = $request->date;
        $formation->price = $request->price;
        $formation->save();
        return (view('admin.create-formation', compact(TRUE)));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(formations $formation)
    {
        $formation = formations::with('categorie')->find($formation);


        return inertia('showFormation',[
            'formation'=>$formation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(formations $formation)
    {
        $formations = formations::find($formation)->first();
        return view('admin.update-formation', compact('formations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formation)
    {
        $formation = formations::find($formation);
        $formation->update([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
            'date' => $request->date,
        ]);
        $formations = formations::all();

        // $formation->title=$request->title;
        // $formation->content=$request->content;
        // $formation->date=$request->date;
        // $formation->price=$request->price;
        // $formation->update();
        return view('admin.admin', compact('formations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy($formation)
    {

        $Toformation = formations::find($formation);
        $Toformation->delete();
        $formations = formations::all();
        return view('admin.admin', compact('formations'));
    }
}
