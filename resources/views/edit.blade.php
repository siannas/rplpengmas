<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit User
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', $user->id) }}" id="myForm">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur">Umur</label>
                            <input type="number" name="umur" class="form-control" id="umur" value="{{ $user->umur }}">
                        </div>
                        <div class="form-check">
                            <label for="exampleInputAlamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $user->alamat }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>