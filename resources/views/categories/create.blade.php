@extends('layouts.master')

@section('create')

    <h1>Create Categorie</h1>
    <form method="post" action="{{route('categorie.store')}}">
        @csrf
        @method('post')
        <label for="">nom categorie</label>
        <input type="name" name="nomCat" placeholder="nom categorie" required><br />
        <input type="submit" value="create categorie">
    </form>
    
@endsection

