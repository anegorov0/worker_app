@extends('layout.main')

@section('content')



<div>
    <hr>

        <div>
            <div>Name: {{$worker->name}}</div>
            <div>Surname: {{$worker->surname}}</div>
            <div>email: {{$worker->email}}</div>
            <div>age: {{$worker->age}}</div>
            <div>description: {{$worker->description}}</div>
            <div>
                <a href=" {{route('workers.index')}} ">Назад</a>
            </div>
        </div>
        <hr>

</div>



@endsection