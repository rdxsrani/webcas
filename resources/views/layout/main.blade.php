<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand bg-warning p-1">
        <div class="container-fluid">
        <a href="" class="btn btn-warning">Informatics Lab</a>
        </div>
    </nav>
        <nav class="navbar navbar-expand bg-warning sticky top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand"></a>
                <a href="" class="btn btn-primary m-3">Tugas Pendahuluan</a>
                <a href="/tp/create" class="btn btn-primary m-3">Tambah Pengumuman</a>
                <a href="" class="btn btn-warning">Home</a>
            </div>
        </nav>

    <div class="container">
        <div class="row m-3">
            <div class="col-md-7">
                @yield('content')
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 w-40 mt-5">
                <form action="">
                    <label for="">Search</label>
                    <input type="search" placeholder="Search here..">
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Archive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>