<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Genre Film Terbaru</h3>
                <h5 class="text-center my-4">Nabila Aulia Rahmah</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Film</th>
                            <th>Genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($film as $film)
                        <tr>
                            <td>{{ $film->title }}</td>
                            <td>
                                @foreach ($film->genres()->get() as $genre)
                                <button class="btn btn-sm btn-primary me-2" disabled>{{ $genre->genre }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>
                <h5 class="text-center mb-4">Input Data</h5>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <form action="{{url('store-form')}}" method="post">
                            {{csrf_field()}}
                            <tr>
                                <td><label for="title">Judul Film :</label></td>
                                <td>
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <input type="text" id="title" name="title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="genre">Genre Film :</label>
                                </td>
                                <td>
                                    <select id="genre" name="genre">
                                        <option value="1">Drama</option>
                                        <option value="2">Komedi</option>
                                        <option value="3">Animasi</option>
                                        <option value="4">Aksi</option>
                                        <option value="5">Horor</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="btn btn-primary" type="submit" value="Submit"></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>