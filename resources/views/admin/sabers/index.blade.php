@extends('layouts.admin')

@section('content')

<div class="card bg-dark">
    <div class="card-header">
        <i class="fas fa-jedi fa-lg  "></i> {{ __('Lightsabers') }}
    </div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <a href="#" class="card-link"><i class="fas fa-plus-circle"></i> Add Lightsaber</a>
    </div>

</div>

<table class="table table-striped table-inverse table-responsive table-dark">
    <thead class="thead-inverse">
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>name</th>
            <th>price</th>
            <th>Quantity</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($sabers as $saber)
        <tr>
            <td scope="row">{{$saber->id}}</td>
            <td><img height="100" src="{{asset('/storage/' . $saber->thumb)}}" alt=""></td>
            <td class="w-50">{{$saber->name}}</td>
            <td class="w-25">{{$saber->price}}</td>
            <td>{{$saber->qty}}</td>
            <td class="w-25">View/Edit/Delete</td>
        </tr>
        @empty
        <tr>
            <td scope="row">
                Add your first lightsaber
            </td>

        </tr>
        @endforelse

    </tbody>
</table>
</div>

@endsection
