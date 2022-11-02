<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
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
        $formation = new formation;
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
        $formations = formation::find($formation);
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
        $formation = formation::find($formation);
        $formation->update([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
            'date' => $request->date,
        ]);
        $formations = formation::all();

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

        $Toformation = formation::find($formation);
        $Toformation->delete();
        $formations = formation::all();
        return view('admin.admin', compact('formations'));
    }
}
