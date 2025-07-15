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
        <form action="{{route('workers.store')}}" method="post">
            @csrf
            <div style="margin-bottom: 15px;">
                <input type="text" name="name"
                       placeholder="name" value="{{old('name')}}">
                @error('name')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <input type="text" name="surname"
                       placeholder="surname" value="{{old('surname')}}">
                @error('surname')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <input type="email" name="email"
                       placeholder="email" value="{{old('email')}}">
                @error('email')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <input type="number" name="age"
                       placeholder="age" value="{{old('age')}}">
            </div>

            <div style="margin-bottom: 15px;">
                    <textarea name="description"
                              placeholder="description">
                        {{old('description')}}
                    </textarea>
                @error('description')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <input {{old('is_married') == 'on' ? 'checked' : ''}}
                       id="isMarried" type="checkbox" name="is_married">
                <label for="isMarried">Is married?</label>
                @error('is_married')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <input type="submit" value="Добавить">
            </div>

        </form>

    </div>
    <hr>

</div>
</body>
</html>
