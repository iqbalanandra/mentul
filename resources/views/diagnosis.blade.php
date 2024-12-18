<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentul</title>
</head>
<body>
    <form method="POST" action="/diagnosis">
        @csrf
        @foreach ($gejalas as $gejala)
            <div>
                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                <label>{{ $gejala->deskripsi }}</label>
            </div>
        @endforeach
        <button type="submit">diagnosis</button>
    </form>

</body>
</html>
