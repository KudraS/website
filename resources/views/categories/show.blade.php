<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Категория: {{ $category->name }}</title>
</head>
<body>
<h1>Категория: {{ $category->name }}</h1>
<p>ID: {{ $category->id }}</p>

<h2>Блюда в этой категории:</h2>

@if($category->dishes && $category->dishes->count() > 0)
    <ul>
        @foreach($category->dishes as $dish)
            <li>
                <a href="{{ url('/dishes/' . $dish->id) }}">
                    {{ $dish->name }}
                </a>
                (Время готовки: {{ $dish->cooking_time }} мин.)
            </li>
        @endforeach
    </ul>
@else
    <p>В этой категории пока нет блюд</p>
@endif

<br>
<a href="{{ url('/categories') }}">← Назад ко всем категориям</a>
</body>
</html>
