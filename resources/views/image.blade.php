<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload image</title>
</head>
<body>
<form action="{{route('imgupload')}}" method= "POST" enctype="multipart/form-data">
@csrf

<input type="file" name="image">
<input type="submit" value="Upload">

</form>
</body>
</html>