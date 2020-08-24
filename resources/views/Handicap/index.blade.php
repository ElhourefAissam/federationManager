@extends('layouts.app')

@section('content')
    <div id="app">
        <h1 class=" text-info  m-md-3">Liste des Handicaps</h1>
        {{-- <a class=" btn-block btn-sm m-md-3" href="{{route('Handicap.create')}}">Ajouter</a> --}}
        
        <handicap></handicap>
    
    </div>

    {{-- <h1 class=" text-info  m-md-3">Liste des Handicaps</h1>
    <a class=" btn-block btn-sm m-md-3" href="{{route('Handicap.create')}}">Ajouter</a>
    
    @forelse ($handicaps as $item)
    <div class=" list-group">
        <div class="list-group-item m-lg-1">
            <h3><a href="{{ route('Handicap.show', ['Handicap' => $item->id]) }}"> <span>{{$item->lebelFr}}</span> &ThinSpace; <span class=" float-right">{{$item->lebelAr}}</span></a></h3>
            <small class=" float-left col-6">{{$item->descriptionfr}}</small>
            <small class=" float-right col-6 text-xl-right">{{$item->descriptionAr}}</small>
        </div>
    </div>
    @empty
    <div class=" alert-danger">
        <h3>No Handicaps load!!</h3>
    </div>       
    @endforelse --}}

@endsection