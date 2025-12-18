<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Блюдо: {{ $dish->name }}</title>
</head>
<body>
<h1>{{ $dish->name }}</h1>

<p><strong>Категория:</strong>
    <a href="{{ url('/categories/' . $dish->category_id) }}">
        {{ $dish->category->name ?? 'Неизвестно' }}
    </a>
</p>

<p><strong>Время приготовления:</strong> {{ $dish->cooking_time }} минут</p>

<h2>Способ приготовления:</h2>
<p>{{ $dish->cooking_method }}</p>

<h2>Ингредиенты:</h2>
@if($dish->ingredients && $dish->ingredients->count() > 0)
    <ul>
        @foreach($dish->ingredients as $ingredient)
            <li>
                {{ $ingredient->name }} -
                {{ $ingredient->pivot->quantity }} {{ $ingredient->unit }}
            </li>
        @endforeach
    </ul>
@else
    <p>Ингредиенты не указаны</p>
@endif

<br>
<a href="{{ url('/dishes') }}">← Назад ко всем блюдам</a>
</body>
</html>
