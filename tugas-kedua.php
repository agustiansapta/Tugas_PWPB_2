<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Tugas Kedua</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
    <style>
    .user {
        display: inline-block;
        width: 100px;
        height: 150px;
        border-radius: 100%;

        object-fit: cover;
    }
    </style>
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-light border-bottom box-shadow" style="
    background-color: #eeeeee;">
        <h5 class="my-0 mr-md-auto font-weight-normal">Tugas PWPB</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="tugas_pertama.php">tugas Pertama</a>
            <a class="p-2 text-dark" href="">tugas Kedua</a>
            <a class="p-2 text-dark" href="#"></a>
            <a class="p-2 text-dark" href="#"></a>
        </nav>
        <a class="btn btn-outline-primary" href="index.php">Beranda</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Tugas Kedua</h1>
        <p class="lead">Ini adalah kumpulan Rumus bangun ruang</p>
    </div>

    <div class="container">
                <div class="card header">
                    <img src="kubus.gif" width="50%">
                    <div class="card-body">
                        <h5 class="card-title">Kubus</h5>
                        <p class="card-text">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Luas</span>
                                </div>
                                <input type="text" class="form-control" readonly value="6  x (sisi x sisi)">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Keliling</span>
                                </div>
                                <input type="text" class="form-control" readonly value="Rusuk x rusuk x rusuk">
                            </div>

                        </p>
                    </div>
            
                </div>
                <div class="card">
                      <img src="dodecahedron.gif" width="50%">
                    <div class="card-body">
                        <h5 class="card-title">limas segi lima</h5>
                        <p class="card-text">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Luas</span>
                                </div>
                                <input type="text" class="form-control" readonly value="4 x π x r2">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Volume</span>
                                </div>
                                <input type="text" class="form-control" readonly value="4/3 x π x r3">
                            </div>

                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="tetrahedron.gif" width="50%">
                    <div class="card-body">
                        <h5 class="card-title">limas segitiga</h5>
                        <p class="card-text">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Luas</span>
                                </div>
                                <input type="text" class="form-control" readonly value="(2 x π x r x r) + (π x d x t)">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Volume</span>
                                </div>
                                <input type="text" class="form-control" readonly value="π x r x r x t">
                            </div>

                        </p>
                    </div>
                </div>

            </div>
        </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <!-- <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24"> -->
                    Kelompok Kami <small class="d-block mb-3 text-muted">&copy; 2019</small>
                </div>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    </script>
</body>

</html>