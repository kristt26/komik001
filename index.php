<!doctype html>
<html lang="en">

<head>
    <title>pmb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/komik059" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/komik059/index.php/mahasiswa" class="nav-link">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a href="/komik059/index.php/jurusan" class="nav-link">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a href="/komik059/index.php/matakuliah" class="nav-link">Matakuliah</a>
                </li>
                <li class="nav-item">
                    <a href="/komik059/index.php/dosen" class="nav-link">Dosen</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mt-6" role="main">
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top: 75px !important;">
                    <?php
                    $location = "/komik001";
                    $me = $location;
                    $request = $_SERVER['REQUEST_URI'];
                    switch ($request) {
                        case $me . '/';
                            break;
                        case $me . '/index.php/mahasiswa';
                            require "layout/mahasiswa.php";
                            break;
                        case $me . '/index.php/mahasiswa/add';
                            require "layout/tambah_mahasiswa.php";
                            break;
                        case $me . '/index.php/jurusan';
                            require "layout/jurusan.php";
                            break;
                        case $me . '/index.php/jurusan/add';
                            require "layout/tambah_jurusan.php";
                            break;
                        case $me . '/index.php/matakuliah';
                            require "layout/matakuliah.php";
                            break;
                        case $me . '/index.php/matakuliah/add';
                            require "layout/tambah_matakuliah.php";
                            break;
                            case $me . '/index.php/dosen';
                            require "layout/dosen.php";
                            break;
                        case $me . '/index.php/dosen/add';
                            require "layout/tambah_dosen.php";
                            break;
                        default:
                            http_response_code(404);
                            echo "404";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>