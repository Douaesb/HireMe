<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        // dd($request->nomCat);
        $data = $request->validate([
            'nomCat'  => ['required', 'min:3']
        ]);
        Categorie::create($data);
        return redirect(route('categorie.index'));
    }


    public function edit(Categorie $categorie){
        return view('categories.edit', ['categorie' => $categorie]);

    }

    public function update(Categorie $categorie, Request $request){
        $data = $request->validate([
            'nomCat'  => ['required', 'min:3']
        ]);

        $categorie->update($data);
        return redirect(route('categorie.index'))->with('success',  "La catégorie a bien été modifiée");
    }

    public function delete(Categorie $categorie){
        $categorie->delete();
        return redirect(route('categorie.index'))->with('success',  "La catégorie a bien été supprimée");

    }
}
