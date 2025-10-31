<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baru</title>
</head>

<body>
    <h1>List KRS Mahasiswa</h1>

    @foreach ($users as $user)
        <h3>{{ $user->name }} - {{ $user->email }}</h3>
        <ul>
            @foreach ($user->krses as $krs)
                @foreach ($matkuls as $matkul)
                    @if ($krs->matkul_id == $matkul->id)
                        <li>{{ $matkul->nama_matkul }}</li>
                    @endif
                @endforeach
            @endforeach
        </ul>
    @endforeach

    <button>Logout</button>
</body>

</html>
