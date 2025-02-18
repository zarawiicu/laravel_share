<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Link</title>
</head>
<body>
    <h1>Daftar Link</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->category}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>