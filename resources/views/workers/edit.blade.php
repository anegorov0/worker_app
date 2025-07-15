<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
Create page
<div>
    <hr>

        <div>
            <form action="{{route('workers.update', $worker->id)}}" method="post">
                @csrf
                @method('patch')
                <div style="margin-bottom: 15px;">
                    <input type="text" name="name"
                    placeholder="name" value="{{old('name') ?? $worker -> name}}">
                    @error('name')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div style="margin-bottom: 15px;">
                    <input type="text" name="surname"
                    placeholder="surname" value="{{old('surname') ?? $worker -> surname}}">
                    @error('surname')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div style="margin-bottom: 15px;">
                    <input type="email" name="email"
                    placeholder="email" value="{{old('email') ?? $worker -> email}}">
                    @error('email')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div style="margin-bottom: 15px;">
                    <input type="number" name="age"
                    placeholder="age" value="{{old('age') ?? $worker -> age}}">
                </div>

                <div style="margin-bottom: 15px;">
                    <textarea name="description"
                    placeholder="description">
                        {{old('description') ?? $worker -> description}}
                    </textarea>
                    @error('description')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div style="margin-bottom: 15px;">
                    <input id="isMarried" type="checkbox" name="is_married"
                        {{$worker->is_married ? 'checked' : ''}}
                    >
                    <label for="isMarried">Is married?</label>
                    @error('is_married')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div style="margin-bottom: 15px;">
                    <input type="submit" value="Сохранить">
                </div>

            </form>

        </div>
        <hr>

</div>
</body>
</html>
