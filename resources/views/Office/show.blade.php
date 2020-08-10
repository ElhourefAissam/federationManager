@extends('layouts.app')

@section('content')
    <h1>Office</h1>

    <div class=" ">
        <div class="row">
            <h3>{{$offic->lebelFr}}</h3>
            <h3 class=" float-right col-6 text-xl-right">{{$offic->lebelAr}}</h3>
        </div>
        <div class="row">
            <h4>{{$offic->AdressFr}}</h4>
            <h4 class=" float-right col-6 text-xl-right">{{$offic->AdressAr}}</h4>
        </div>
        <h4>{{$offic->Telephone}}</h4>
    </div>
    <div class="row">
        <a href="{{route('Offices.edit',['Office' => $offic->id])}}" class="btn btn-warning">Modifie</a>

        {!! Form::open(array(route('Offices.destroy',['Office'=>$offic->id]), 'method' => 'DELETE'))!!}
        {{Form::token()}}
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div>
            {{Form::submit('Supprimer',array('class' => 'btn btn-danger'))}}
        </div>
        {!! Form::close() !!}
    </div>

    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Offices.index')}}">Reture a La Liste</a>
@endsection