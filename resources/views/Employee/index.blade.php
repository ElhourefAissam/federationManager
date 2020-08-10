@extends('layouts.app')

@section('content')

    <h1 class=" btn-dark m-md-5">Liste des Employes</h1>
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.create')}}">Ajouter</a>
    @if ($employes->count() == 0)
        <div class=" alert-danger">
            <h3>No Employe load!!</h3>
        </div>
    @else
        <table class="table table-bordered">
            <th>Nom enFr</th>
            <th>Nom enAr</th>
            <th>CNI</th>
            <th>DNS</th>
            <th>Sexe</th>
            <th>StatutFamilierFr</th>
            <th>StatutFamilierAr</th>
            <th>Telephone</th>
            <th>AdressFr</th>
            <th>العنوان</th>
            @foreach ($employes as $item)
                <tr>
                    <td>{{$item->NomFr}}</td>
                    <td>{{$item->NomAr}}</td>
                    <td>{{$item->CNI}}</td>
                    <td>{{$item->DNS}}</td>  
                    <td>{{$item->Sexe}}</td>
                    <td>{{$item->StatutFamilierFr}}</td>
                    <td>{{$item->StatutFamilierAr}}</td>
                    <td>{{$item->Telephone}}</td>
                    <td>{{$item->AdressFr}}</td>
                    <td>{{$item->AdressAr}}</td>
                    <td>
                        <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.show',['Employee'=>$item->id])}}">Afficher</a>
                        </td>
                        <td>
                            <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.edit',['Employee'=>$item->id])}}">Modifie</a>
                        </td>
                        <td>
                            <a class=" nv-indexLine mb-sm-n1 text-danger" href="{{route('Employee.destroy',['Employee'=>$item->id])}}">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection