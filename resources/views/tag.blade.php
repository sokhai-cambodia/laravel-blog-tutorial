<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<ul>
    @foreach($tags as $tag)
        <li>{{ $tag }}</li>
    @endforeach
</ul>

</body>
</html>