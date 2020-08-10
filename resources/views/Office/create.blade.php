@extends('layouts.app')

@section('content')

    <h1>Ajouter un Office</h1>

    {!! Form::open(array('route' => 'Offices.store', 'method' => 'POST'))!!}
    {{Form::token()}}
    <div class=" form-group">
        {{ Form::label('lebelfr', 'Nom ')}}
        {{ Form::text('lebelFr', '', array('class' => 'form-control','placeholder' => 'Nom Complete'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('lebelar', 'الاسم ')}}
        {{ Form::text('lebelAr', '', array('class' => 'form-control','placeholder' => 'الاسم الكامل'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('Adressfr', 'Adress ')}}
        {{ Form::text('AdressFr', '', array('class' => 'form-control','placeholder' => 'Adress'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('Adressar', 'العنوان ')}}
        {{ Form::text('AdressAr', '', array('class' => 'form-control','placeholder' => 'العنوان'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('telephone', 'Telephone ')}}
        {{ Form::text('Telephone', '', array('class' => 'form-control','placeholder' => '0699999999'))}}
    </div>
    <div>
        {{Form::submit('َAjouter',array('class' => 'btn btn-primary'))}}
    </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Offices.index')}}">Reture a La Liste</a>

@endsection