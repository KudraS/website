<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ингредиент: {{ $ingredient->name }}</title>
</head>
<body>
<h1>{{ $ingredient->name }}</h1>

<p><strong>Единица измерения:</strong> {{ $ingredient->unit }}</p>

<h2>Используется в блюдах:</h2>

@if($ingredient->dishes && $ingredient->dishes->count() > 0)
    <ul>
        @foreach($ingredient->dishes as $dish)
            <li>
                <a href="{{ url('/dishes/' . $dish->id) }}">
                    {{ $dish->name }}
                </a>
                - {{ $dish->pivot->quantity }} {{ $ingredient->unit }}
            </li>
        @endforeach
    </ul>
@else
    <p>Этот ингредиент пока не используется ни в одном блюде</p>
@endif

<br>
<a href="{{ url('/dishes') }}">← К списку блюд</a>
</body>
</html>
