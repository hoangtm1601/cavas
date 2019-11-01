<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complete</title>
</head>
<body>
{!! Form::open([
'route' => 'test',
'enctype' => 'multipart/form-data',
'files' => true,
]) !!}
<label for="name">Name</label>
{!! Form::text('name') !!}
<label for="avatar">Avatar</label>
{!! Form::file('avatar') !!}
{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}
</body>
</html>
