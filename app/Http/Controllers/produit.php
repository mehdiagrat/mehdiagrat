<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pro;

class produit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=pro::all();
        return view('index',compact('produits'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = $request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('assets/img'), $imageName);

    $produit = new Pro();
    $produit->nom = $request->input('nom');
    $produit->type = $request->input('type');
    $produit->image = $imageName;
    $produit->save();

    return redirect()->route('produit.index')->with('success', 'Produit ajouté avec succès.');
}

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = Pro::findOrFail($id);
       return view('show',compact('s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Pro::findOrFail($id);
       return view('edit',compact('a'));
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
       
        $request->validate([
            'nom' => 'required|string|max:255',
            
        ]);

        $produit = pro::findOrFail($id);

        $produit->nom = $request->input('nom');
        
        $produit->save();

        return redirect()->route('produit.index')->with('success', 'Produit mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = pro::findOrFail($id);

        $produit->delete();

        return redirect()->route('produit.index')->with('success', 'Produit supprimé avec succès.');
    }
}
