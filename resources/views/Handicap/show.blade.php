@extends('layouts.app')

@section('content')
    <h1>{{$handicap->lebelFr}}</h1>
    <h1>{{$handicap->lebelAr}}</h1>
    <h1>{{$handicap->descriptionfr}}</h1>
    <h1>{{$handicap->descriptionAr}}</h1>
    <div class="row">
        <a href="{{route('Handicap.edit',['Handicap' => $handicap->id])}}" class="btn btn-warning">Modifie</a>

        {!! Form::open(array(route('Handicap.destroy',['Handicap'=>$handicap->id]), 'method' => 'DELETE'))!!}
        {{Form::token()}}
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div>
                {{Form::submit('Supprimer',array('class' => 'btn btn-danger'))}}
            </div>
        {!! Form::close() !!}
    </div>

    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Handicap.index')}}">Reture a La Liste</a>
@endsection