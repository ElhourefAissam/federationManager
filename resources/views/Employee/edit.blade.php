@extends('layouts.app')

@section('content')
    <h1>Modifie un Employe</h1>
    {!! Form::open(array('route' => ['Employee.update','Employee'=> $Employee->id], 'method' => 'PUT'))!!}
        {{ csrf_field() }}  
        <div class=" form-group">
            {{ Form::label('NomFr', 'Nom')}}
            {{ Form::text('NomFr', $Employee->NomFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('NomAr', 'الاسم')}}
            {{ Form::text('NomAr', $Employee->NomAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('CNI', 'CNI')}}
            {{ Form::text('CNI', $Employee->CNI, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('DNS', 'DNS')}}
            {{ Form::date('DNS', $Employee->DNS, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Sexe', 'Sexe')}}
            {{ Form::text('Sexe', $Employee->Sexe, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('StatutFamilier  Fr', 'Statut Familier')}}
            {{ Form::text('StatutFamilierFr', $Employee->StatutFamilierFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('StatutFamilierAr', 'Statut Familier')}}
            {{ Form::text('StatutFamilierAr', $Employee->StatutFamilierAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Telephone', 'Telephone')}}
            {{ Form::text('Telephone', $Employee->Telephone, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressFr', 'AdressFr')}}
            {{ Form::text('AdressFr', $Employee->AdressFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressAr', 'AdressAr')}}
            {{ Form::text('AdressAr', $Employee->AdressAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Picture', 'Picture')}}
            {{ Form::file('Picture',array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Modifie',array('class' => 'btn btn-warning'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.index')}}">Reture a La Liste</a>
@endsection 
{{-- @if ($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
                <li class=" text-danger">{{$error}}</li>
            @endforeach
            </ul>
             @endif --}}









