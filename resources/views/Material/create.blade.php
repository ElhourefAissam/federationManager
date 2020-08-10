@extends('layouts.app')

@section('content')

    <h1>Ajouter une Materiale</h1>

    {!! Form::open(array('route' => 'Material.store', 'method' => 'POST'))!!}
        {{Form::token()}}
        <div class=" form-group">
            {{ Form::label('lebel', 'lebel ')}}
            {{ Form::text('lebel', '', array('class' => 'form-control','placeholder' => 'Nom Complete'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Description', 'Description ')}}
            {{ Form::textarea('Description', '', array('class' => 'form-control','placeholder' => 'الاسم الكامل'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Nombre', 'Nombre ')}}
            {{ Form::number('Nombre', '', array('class' => 'form-control','placeholder' => 'Description'))}}
        </div>
        <div>
            {{Form::submit('Click Me!',array('class' => 'btn btn-primary'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Material.index')}}">Reture a La Liste</a>
@endsection