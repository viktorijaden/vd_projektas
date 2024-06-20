<!DOCTYPE html>
<html>
<head>
    <title>Įrašai</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Grįžti į pagrindinį</a>
</body>
</html>