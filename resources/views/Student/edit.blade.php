@extends('layouts.app')

@section('content')
    <h1>Modifie un Employe</h1>
    {!! Form::open(array('route' => ['Student.update','Student'=> $student->id], 'method' => 'PUT'))!!}
        {{ csrf_field() }}  
        <div class=" form-group">
            {{ Form::label('NomFr', 'Nom')}}
            {{ Form::text('NomFr', $student->NomFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('NomAr', 'الاسم')}}
            {{ Form::text('NomAr', $student->NomAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('CNI', 'CNI')}}
            {{ Form::text('CNI', $student->CNI, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('DNS', 'DNS')}}
            {{ Form::date('DNS', $student->DNS, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Sexe', 'Sexe')}}
            {{ Form::text('Sexe', $student->Sexe, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Statut', 'Statut Familier')}}
            {{ Form::text('Statut', $student->Statut, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Telephone', 'Telephone')}}
            {{ Form::text('Telephone', $student->Telephone, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressFr', 'AdressFr')}}
            {{ Form::text('AdressFr', $student->AdressFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('AdressAr', 'AdressAr')}}
            {{ Form::text('AdressAr', $student->AdressAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Picture', 'Picture')}}
            {{ Form::file('Picture',array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Modifie',array('class' => 'btn btn-warning'))}}
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









