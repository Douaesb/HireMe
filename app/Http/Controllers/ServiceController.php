<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Categorie;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('datePublication', 'desc')->get();
        $categories = Categorie::all();
    
        return view('services.index', ['services' => $services, 'categories' => $categories]);
    }
    

    // public function create(){
    //     $categories = Categorie::all();
    //     return view('services.index', ['categories' => $categories]);
    // }
    

    public function store(Request $request){
        $data = $request->validate([
            'titre' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'prix' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'numeric'],
            'categorie_id' => ['required', 'numeric'],
        ]);
        $data['datePublication'] = Carbon::now();
        Service::create($data);
        return redirect(route('service.index'));
    }


    // public function edit(Service $service){
    //     return view('services.edit', ['service' => $service]);

    // }

    // public function update(Service $service, Request $request){
    //     $data = $request->validate([
    //         'nomCat'  => ['required', 'min:3']
    //     ]);

    //     $service->update($data);
    //     return redirect(route('service.index'))->with('success',  "La catégorie a bien été modifiée");
    // }

    // public function delete(Service $service){
    //     $service->delete();
    //     return redirect(route('service.index'))->with('success',  "La catégorie a bien été supprimée");

    // }
}
