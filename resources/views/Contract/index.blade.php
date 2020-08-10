@extends('layouts.app')

@section('content')

    <h1 class=" btn-dark m-md-5">Liste des Contrate</h1>
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Contract.create')}}">Ajouter</a>
    @if ($Contracts->count() == 0)
        <div class=" alert-danger">
            <h3>No Contract load!!</h3>
        </div>
    @else
        <table class="table table-bordered">
            <th>Nom</th>
            <th>Function enFr</th>
            <th>Function enAr</th>
            <th>Salaire</th>
            <th>DateDebut</th>
            <th>DateFin</th>
            <th></th>
            <th></th>
            <th></th>
            <th>Dernier Modifier</th>
            @foreach ($Contracts as $item)
                <tr>
                    <td>{{$item->NomFr}}</td>
                    <td>{{$item->FunctionFr}}</td>
                    <td>{{$item->FunctionAr}}</td>
                    <td>{{$item->Salaire}} DH</td>
                    <td>{{$item->DateDebut}}</td>
                    <td>{{$item->DateFin}}</td>
                    <td>
                        <a class=" nv-indexLine  mb-sm-n1" href="{{route('Contract.show',['Contract'=>$item->id])}}">Afficher</a>
                        </td>
                        <td>
                            <a class=" nv-indexLine  mb-sm-n1" href="{{route('Contract.edit',['Contract'=>$item->id])}}">Modifie</a>
                        </td>
                        <td>
                            <a class=" nv-indexLine mb-sm-n1 text-danger" href="{{route('Contract.destroy',['Contract'=>$item->id])}}">Supprimer</a>
                    </td>
                    <td>{{$item->updated_at{{-- ->diffForHumans()--}}}}</td>  
                </tr>
            @endforeach
        </table>
    @endif

@endsection