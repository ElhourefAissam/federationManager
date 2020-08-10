@extends('layouts.app')

@section('content')
    <h1>ُEmploye</h1>
    <div class="panel">
        <h3><small>{{$employee->NomFr}}</small><small>{{$employee->NomAr}}</small></h3>
        <h1>{{$employee->contracts}}</h1>
        <div class="row">
            <a href="{{route('Employee.edit',['Employee' => $employee->id])}}" class="btn btn-warning">Modifie</a>
            
            {!! Form::open(array(route('Employee.destroy',['Employee'=>$employee->id]), 'method' => 'DELETE'))!!}
            {{Form::token()}}
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div>
                {{Form::submit('Supprimer',array('class' => 'btn btn-danger'))}}
            </div>
            {!! Form::close() !!}
        </div>
        
        <h1 class=" btn-dark m-md-5">Liste des Contrate</h1>
        @if ($conract->count() == 0)
            <div class=" alert-danger">
                <h3>No Contract load!!</h3>
            </div>
        @else
            <table class="table table-bordered">
                <th>Function enFr</th>
                <th>Function enAr</th>
                <th>Salaire</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Dernier Modifier</th>
                @foreach ($conract as $item)
                    <tr>
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
        <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.index')}}">Reture a La Liste</a>
    </div>
    </div>
@endsection