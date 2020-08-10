@extends('layouts.app')

@section('content')

    <h1 class=" text-info  m-md-3">Liste des Offices</h1>
    <a class="  btn-sm m-md-3" href="{{route('Offices.create')}}">Ajouter</a>
    <select class="form-control">
        @foreach ($offic as $item)
            <option value="{{ $item->id }}" @if(8 == $item->id) selected @endif>{{$item->lebelFr}}</option>
        @endforeach
    </select>
    @if ($offic->count() == 0)
        <div class=" alert-danger">
            <h3>No Contract load!!</h3>
        </div>
    @else
        @forelse ($offic as $item)
        <div class=" list-group">
            <div class="list-group-item m-lg-1">
                <h3><a href="{{ route('Offices.show', ['Office' => $item->id]) }}"> <span>{{$item->lebelFr}}</span> &ThinSpace; <span class="float-right">{{$item->lebelAr}}</span></a></h3>
                <small class="float-left col-6">{{$item->AdressFr}}</small>
                <small class="float-right">{{$item->AdressAr}}</small>
                <small class="float-left col-6">{{$item->Telephone}}</small>
            </div>
        </div>
        @empty
        <div class=" alert-danger">
            <h3>No Offices load!!</h3>
        </div>       
        @endforelse
    @endif

@endsection