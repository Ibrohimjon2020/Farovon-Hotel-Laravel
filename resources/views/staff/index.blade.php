<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($staffs as $staff)
    <h1>{{ $staff->firstname }}</h1>
    <img src="{{ asset('storage/'.$staff->image) }}" alt="none">
    @endforeach
</body>
</html>