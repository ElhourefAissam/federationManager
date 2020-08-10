@extends('layouts.app')

@section('content')
    <h1>Ajouter un Eleve</h1>
    {!! Form::open(array('route' => 'Student.store', 'method' => 'POST'))!!}
        {{Form::token()}}
        <div class=" form-group">
            {{ Form::label('NomFr', 'Nom')}}
            {{ Form::text('NomFr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('NomAr', 'الاسم')}}
            {{ Form::text('NomAr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('CNI', 'CNI')}}
            {{ Form::text('CNI', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('DNS', 'DNS')}}
            {{ Form::date('DNS', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Sexe', 'Sexe')}}
            {{ Form::text('Sexe', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Statut', 'Statut Familier')}}
            {{ Form::text('Statut', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Telephone', 'Telephone')}}
            {{ Form::text('Telephone', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressFr', 'AdressFr')}}
            {{ Form::text('AdressFr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressAr', 'AdressAr')}}
            {{ Form::text('AdressAr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Picture', 'Picture')}}
            {{ Form::file('Picture',array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Ajouter',array('class' => 'btn btn-primary'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Student.index')}}">Reture a La Liste</a>
@endsection

{{-- @if ($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
                <li class=" text-danger">{{$error}}</li>
            @endforeach
            </ul>
             @endif --}}









