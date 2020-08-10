@extends('layouts.app')

@section('content')
    <h1>Material</h1>
    <div class="well">
        <h3>{{$material->lebel}}</h3>
        <small>{{$material->Description}}</small>
        <h1>{{$material->number}}</h1>
        <div class="row">
            <a href="{{route('Material.edit',['Material' => $material->id])}}" class="btn btn-warning">Modifie</a>
    
            {!! Form::open(array(route('Material.destroy',['Material'=>$material->id]), 'method' => 'DELETE'))!!}
            {{Form::token()}}
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div>
                {{Form::submit('Supprimer',array('class' => 'btn btn-danger'))}}
            </div>
            {!! Form::close() !!}
        </div>
    
        <a class=" nv-indexLine  mb-sm-n1" href="{{route('Material.index')}}">Reture a La Liste</a>
    </div>
@endsection