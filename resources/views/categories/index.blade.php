<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все категории</title>
</head>
<body>
<h1>Категории блюд</h1>

<ul>
    @foreach($categories as $category)
        <li>
            <a href="{{ url('/categories/' . $category->id) }}">
                {{ $category->name }}
            </a>
            (ID: {{ $category->id }})
        </li>
    @endforeach
</ul>

<p>Всего категорий: {{ $categories->count() }}</p>
</body>
</html>
