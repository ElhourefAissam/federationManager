@extends('layouts.app')

@section('content')
    <h1>Ajouter un type de Handicap</h1>
    {!! Form::open(array('route' => 'Handicap.store', 'method' => 'POST'))!!}
        {{Form::token()}}
        <div class=" form-group">
            {{ Form::label('lebelFr', 'lebel ')}}
            {{ Form::text('lebelFr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('lebelAr', 'lebel ')}}
            {{ Form::text('lebelAr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('descriptionfr', 'Description ')}}
            {{ Form::textarea('descriptionfr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('descriptionAr', 'الوصف ')}}
            {{ Form::textarea('descriptionAr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Nombre', 'Nombre ')}}
            {{ Form::number('Nombre', '', array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Ajouter',array('class' => 'btn btn-primary'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Handicap.index')}}">Reture a La Liste</a>
@endsection