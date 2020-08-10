@extends('layouts.app')

@section('content')
    <h1>Student</h1>
    <div class="panel">
        <h3><small>{{$student->NomFr}}</small><small>{{$student->NomAr}}</small></h3>

        <div class="row">
            <a href="{{route('Student.edit',['Student' => $student->id])}}" class="btn btn-warning">Modifie</a>
    
            {!! Form::open(array(route('Student.destroy',['Student'=>$student->id]), 'method' => 'DELETE'))!!}
            {{Form::token()}}
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div>
                {{Form::submit('Supprimer',array('class' => 'btn btn-danger'))}}
            </div>
            {!! Form::close() !!}
        </div>
    
        <a class=" nv-indexLine  mb-sm-n1" href="{{route('Student.index')}}">Reture a La Liste</a>
    </div>
    </div>
@endsection