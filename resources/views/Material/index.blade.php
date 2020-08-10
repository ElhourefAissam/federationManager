@extends('layouts.app')

@section('content')
    <h1>Materials</h1>
    <div class=" panel border-primary">
        @forelse ($material as $item)
            <div class="panel-item">
            <h3><a href="{{route('Material.show',['Material'=>$item->id])}}">{{$item->lebel}}</a></h3>
                <small>{{$item->Description}}</small>
                <small>{{$item->number}}</small>
            </div>
        @empty
            <p class=" text-danger">No Material found</p>
        @endforelse
        
    </div>
@endsection