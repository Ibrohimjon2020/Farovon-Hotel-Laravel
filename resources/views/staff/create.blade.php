<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="firstname" id="">
        <input type="text" name="lastname" id="">
        <input type="text" name="phone" id="">
        <input type="file" name="image" id="">
        <button type="submit">Jo'natish</button>
    </form>
</body>
</html>