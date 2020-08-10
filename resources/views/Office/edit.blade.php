@extends('layouts.app')

@section('content')
    <h1>Modifie les Informatyion de ce Office</h1>

    {!! Form::open( ['route' => ['Offices.update', $offic->id], 'method' => 'PUT'])!!}
        {{ csrf_field() }}
        <div class=" form-group">
            {{ Form::label('lebelfr', 'Nom ')}}
            {{ Form::text('lebelFr', $offic)->lebelFr , array('class' => 'form-control','placeholder' => 'Nom Complete'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('lebelar', 'الاسم ')}}
            {{ Form::text('lebelAr', $offic)->lebelAr, array('class' => 'form-control','placeholder' => 'الاسم الكامل'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Adressfr', 'Adress ')}}
            {{ Form::text('AdressFr', $offic)->AdressFr, array('class' => 'form-control','placeholder' => 'Adress'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('Adressar', 'العنوان ')}}
            {{ Form::text('AdressAr', $offic)->AdressAr, array('class' => 'form-control','placeholder' => 'العنوان'))}}
        </div> 
        <div class=" form-group">
            {{ Form::label('telephone', 'Telephone ')}}
            {{ Form::text('Telephone', o$offic)->Telephone, array('class' => 'form-control','placeholder' => '0699999999'))}}
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            {{Form::submit('Modifie',array('class' => 'btn btn-warning fa fa-trash '))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Offices.show',['Office'=>$offic->id])}}">Returene</a>

@endsection