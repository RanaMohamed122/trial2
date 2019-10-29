<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{env('APP_NAME','no')}}</title>
</head>
{{--
<h1>{{$title}}</h1>
--}}
<body>
        @include('nav')
    <div class="container">
        
        <h1>{{$x}}</h1>
        <ul>
            @if(count($y)>0)
                @foreach ($y as $item)
                    <li>{{$item}}</li>
                @endforeach
            @endif
        </ul>
        
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>