@extends('layouts.app')

@section('content')
    {!! Form::open(array('route' => 'Contract.store', 'method' => 'POST'))!!}
    {{Form::token()}}
    <div class=" form-group">
        {{ Form::label('FunctionFr', 'Function ')}}
        {{ Form::text('FunctionFr', '', array('class' => 'form-control','placeholder' => 'Function'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('FunctionAr', 'الوضيفة ')}}
        {{ Form::text('FunctionAr', '', array('class' => 'form-control','placeholder' => ''))}}
    </div>
    <div class=" form-group">
        {{ Form::label('DateDebut', 'Date Debut')}}
        {{ Form::date('DateDebut', \Carbon\Carbon::now(), array('class' => 'form-control'),\Carbon\Carbon::now())}}
    </div>
    <div class=" form-group">
        {{ Form::label('DateFin', 'Date Fin')}}
        {{ Form::date('DateFin', \Carbon\Carbon::create(\Carbon\Carbon::now()->format('Y'), 12, 31), array('class' => 'form-control'),\Carbon\Carbon::now())}}
    </div>
    <div class=" form-group">
        {{ Form::label('Salaire', 'Salaire ')}}
        {{ Form::number('Salaire', '', array('class' => 'form-control','placeholder' => '10000$'))}}
    </div>
    <div>
        {{Form::submit('َAjouter',array('class' => 'btn btn-primary'))}}
    </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Contract.index')}}">Reture a La Liste</a>
@endsection
            {{-- $table->foreignId('employee_id')->references('id')->on('employes');
            $table->foreignId('office_id')->references('id')->on('offices'); --}}