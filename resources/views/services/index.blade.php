@extends('layouts.master')

@section('service')
<h1>services</h1>
<div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
</div>  
<div>
    <div>
        <a href="{{route('service.create')}}">Create service</a>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>nom service</th>
            <th>Edit</th>
        </tr>

        @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->nomCat }}</td>
                <td><a href="{{route('service.edit', ['service' => $service])}}">Edit</a></td>

                <td>
                    <form method="post" action="{{route('service.delete', ['service' => $service])}}">
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

