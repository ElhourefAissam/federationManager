@extends('layouts.app')

@section('content')

    <h1 class=" btn-dark m-md-5">Liste des Employes</h1>
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.create')}}">Ajouter</a>
    @if ($employes->count() == 0)
        <div class=" alert-danger">
            <h3>No Employe load!!</h3>
        </div>
    @else
        @foreach ($employes as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$item->NomFr}} {{$item->NomAr}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{route('Employee.show',['Employee'=>$item->id])}}" class="btn btn-primary">Afficher detaile</a>
                </div>
            </div>
        @endforeach
      @endif
@endsection