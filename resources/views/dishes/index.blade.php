<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все блюда</title>
</head>
<body>
<h1>Блюда</h1>

<ul>
    @foreach($dishes as $dish)
        <li>
            <a href="{{ url('/dishes/' . $dish->id) }}">
                {{ $dish->name }}
            </a>
            <br>
            Категория: {{ $dish->category->name ?? 'Нет категории' }}
            <br>
            Время готовки: {{ $dish->cooking_time }} мин.
        </li>
        <br>
    @endforeach
</ul>

<p>Всего блюд: {{ $dishes->count() }}</p>

<a href="{{ url('/categories') }}">Смотреть категории</a>
</body>
</html>
