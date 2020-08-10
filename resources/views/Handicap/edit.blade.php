@extends('layouts.app')

@section('content')
    {!! Form::open(array('route' => ['Handicap.update','Handicap'=>$handicap->id], 'method' => 'PUT'))!!}
        {{ csrf_field() }}  
        <div class=" form-group">
            {{ Form::label('lebelFr', 'lebel')}}
            {{ Form::text('lebelFr', $handicap->lebelFr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('lebelAr', 'lebel ')}}
            {{ Form::text('lebelAr', $handicap->lebelAr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('descriptionfr', 'Description')}}
            {{ Form::textarea('descriptionfr', $handicap->descriptionfr, array('class' => 'form-control'))}}
        </div>
        <div class=" form-group">
            {{ Form::label('descriptionAr', 'الوصف')}}
            {{ Form::textarea('descriptionAr', $handicap->descriptionAr, array('class' => 'form-control'))}}
        </div>
        <div>
            {{Form::submit('Modifie',array('class' => 'btn btn-warning'))}}
        </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Handicap.index')}}">Reture a La Liste</a>
@endsection