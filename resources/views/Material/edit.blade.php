@extends('layouts.app')

@section('content')
    {!! Form::open(array('route' => ['Material.update', $material->id], 'method' => 'PUT'))!!}
    {{ csrf_field() }}
    <div class=" form-group">
        {{ Form::label('lebel', 'lebel ')}}
        {{ Form::text('lebel', $material->lebel, array('class' => 'form-control'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('Description', 'Description ')}}
        {{ Form::textarea('Description', $material->Description, array('class' => 'form-control'))}}
    </div>
    <div class=" form-group">
        {{ Form::label('Nombre', 'Nombre ')}}
        {{ Form::number('Nombre', $material->Nombre, array('class' => 'form-control'))}}
    </div>

    {{-- {{Form::select('size', )}} --}}

    {{-- <div class=" form-group">
        {{ Form::label('office_id', 'Office ')}}
        {{Form::select('office_id',[
            @foreach ($offic ?? '' ?? '' ?? ''e as $value) {
                ['office_id' => $value->id,'lebel' => $value->lebel],
            }
            @endforeach
        ]), array('class' => 'form-control'))}}
    </div> --}}
    <div>
        {{Form::submit('Modifie',array('class' => 'btn btn-warning'))}}
    </div>
    {!! Form::close() !!}
    <a class=" nv-indexLine mb-sm-n1" href="{{route('Material.show',['Material'=>$material->id])}}">Reture</a>
@endsection