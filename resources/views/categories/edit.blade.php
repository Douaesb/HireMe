@extends('layouts.master')

@section('edit')
    <h1>edit Categorie</h1>
    <form method="post" action="{{route('categorie.update', ['categorie' =>$categorie])}}">
        @csrf
        @method('put')
        <label for="">nom categorie</label>
        <input type="name" name="nomCat" placeholder="nom categorie" value={{$categorie->nomCat}} required><br />
        <input type="submit" value="edit categorie">
    </form>
@endsection
