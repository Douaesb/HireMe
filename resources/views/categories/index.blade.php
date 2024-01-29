@extends('layouts.master')

@section('categorie')
<h1>categories</h1>
<div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
</div>  
<div>
    <div>
        <a href="{{route('categorie.create')}}">Create Categorie</a>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>nom categorie</th>
            <th>Edit</th>
        </tr>

        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->nomCat }}</td>
                <td><a href="{{route('categorie.edit', ['categorie' => $categorie])}}">Edit</a></td>

                <td>
                    <form method="post" action="{{route('categorie.delete', ['categorie' => $categorie])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

