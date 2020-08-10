@extends('layout')

@section('content')
<form method="POST" action="{{route('Employee.store')}}" class="">
    @csrf
        <div>
            <label for="lebelFr">Nom de Handicap</label>
            <input type="text" name="lebelFr">
        </div>
        <div>
            <label for="lebelAr">اسم الاعاقة</label>
            <input type="text" name="lebelAr">
        </div>
        <div>
            <label for="descriptionFr">Description</label>
            <textarea type="text" name="descriptionfr"></textarea>
        </div>
        <div>
            <label for="descriptionAr">وصف</label>
            <textarea type="text" name="descriptionAr"></textarea>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    <a class=" nv-indexLine  mb-sm-n1" href="{{route('Employee.index')}}">Reture a La Liste</a>
@endsection