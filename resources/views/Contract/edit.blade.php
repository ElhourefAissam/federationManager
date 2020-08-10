@extends('layouts.app')

@section('content')
    {!! Form::open( ['route' => ['Contract.update', $contract->id], 'method' => 'PUT'])!!}
        {{ csrf_field() }}
        <div class=" form-group">
            {{ Form::label('FunctionFr', 'Function ')}}
            {{ Form::text('FunctionFr', $contract->FunctionFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('FunctionAr', 'الوضيفة ')}}
            {{ Form::text('FunctionAr', $contract->FunctionAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('DateDebut', 'Date Debut')}}
            {{ Form::date('DateDebut', $contract->DateDebut, array('class' => 'form-control'),\Carbon\Carbon::now())}}
        </div>
        <div class=" form-group">
            {{ Form::label('DateFin', 'Date Fin')}}
            {{ Form::date('DateFin', $contract->DateFin, array('class' => 'form-control'),\Carbon\Carbon::now())}}
        </div>
        <div class=" form-group">
            {{ Form::label('Salaire', 'Salaire ')}}
            {{ Form::number('Salaire', $contract->Salaire, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Modifie',array('class' => 'btn btn-primary'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Contract.index')}}">Reture a La Liste</a>
@endsection