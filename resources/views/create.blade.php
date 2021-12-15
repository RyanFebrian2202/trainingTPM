<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    @extends('layouts.layout')
    @section('content')

    <h1>Create Form</h1>

    {{-- enctype itu hrs ada utk setiap form bila menggunakan laravel --}}
    <form action="{{ route('createBook') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- krn gk ada method delete maka bisa pake "@method("DELETE")" --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput"
                placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="formGroupExampleInput"
                placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput"
                placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput"
                placeholder="Example input placeholder">
        </div>

        {{-- Untuk error message cara 1 (cara 2 ada di folder requset function message--}}
        {{-- btw yg ke print pas error tuh yang di cara 2 --}}
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
