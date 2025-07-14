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
    @foreach($workers as $worker)
        <div>
            <div>Name: {{$worker->name}}</div>
            <div>Surname: {{$worker->surname}}</div>
            <div>email: {{$worker->email}}</div>
            <div>age: {{$worker->age}}</div>
            <div>description: {{$worker->description}}</div>
            <div>
                <a href=" {{route('worker.show', $worker->id)}} ">Просмотреть</a>
            </div>
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>
