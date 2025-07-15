<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
Index page
<div>
    <hr>
    <div>
        <a href="{{route('workers.create')}}">Добавить</a>
    </div>
    <hr>
    <div>
        <form action="{{route('workers.index')}}">
            <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
            <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}">
            <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}">
            <input type="number" name="from" placeholder="from" value="{{request()->get('from')}}">
            <input type="number" name="to" placeholder="to" value="{{request()->get('to')}}">
            <input type="text" name="description" placeholder="description" value="{{request()->get('description')}}">
            <input id="isMarried" type="checkbox" name="is_married" value="{{request()->get('is_married')}}">
            <label for="isMarried"
                   {{request()->get('is_married' == 'on' ? 'checked' : '')}}
            >is married</label>
            <input type="submit">
            <a href="{{route('workers.index')}}">Сбросить</a>
        </form>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div>Name: {{$worker->name}}</div>
            <div>Surname: {{$worker->surname}}</div>
            <div>email: {{$worker->email}}</div>
            <div>age: {{$worker->age}}</div>
            <div>description: {{$worker->description}}</div>
            <div>Is married: {{$worker->is_married}}</div>
            <div>
                <a href=" {{route('workers.show', $worker->id)}} ">Просмотреть</a>

                <div><a href=" {{route('workers.edit', $worker->id)}} ">Редактировать</a></div>
            </div>
            <div>
                <form action="{{route('workers.delete', $worker->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="my-nav">
        {{$workers ->withQueryString()-> links()}}
    </div>
</div>
<style>
    .my-nav svg{
        width: 20px;
    }
</style>
</body>
</html>
