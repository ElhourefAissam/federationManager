@extends('layouts.app')

@section('content')
    <h1>Ajouter un Employe</h1>
    {!! Form::open(array('route' => 'Employee.store', 'method' => 'POST'))!!}
        {{Form::token()}}
        <div class="">
            <div class=" form-group">
                {{ Form::label('NomFr', 'Nom')}}
                {{ Form::text('NomFr', '', array('class' => 'form-control'))}}
            </div>
            <div class=" form-group">
                {{ Form::label('NomAr', 'الاسم')}}
                {{ Form::text('NomAr', '', array('class' => 'form-control'))}}
            </div>

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
            {{ Form::label('StatutFamilierFr', 'Statut Familier')}}
            {{ Form::text('StatutFamilierFr', '', array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('StatutFamilierAr', 'Statut Familier')}}
            {{ Form::text('StatutFamilierAr', '', array('class' => 'form-control'))}}
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
        {{-- <div class=" form-group">
            {{ Form::label('Picture', 'Picture')}}
            {{ Form::select('animal',
                @foreach ($office as $item) 
                      {{ $item->id }}
                @endforeach
        ,array('class' => 'form-control'))}}
        </div> --}}
        {{-- <select class="form-control">
             @foreach ($office as $item) 
                <option value="{{ $item->id }}" @if(8 == $item->id) selected @endif>{{$item->lebelFr}}</option>
            @endforeach
        </select> --}}
        {{-- {{ Form::select('product_id', htmlspecialchars($office), 1, array('class' => 'form-control')) }} --}}
        <div>
            {{Form::submit('Click Me!',array('class' => 'btn btn-primary'))}}
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









