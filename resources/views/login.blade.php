<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>E-Siswa | Login</title>
</head>

<body>

    <section class="login-user">
        <div class="left">
            <img src="{{ asset('images/ill_login_new.png') }}" alt="">
        </div>
        <div class="right">
            <img src="{{ asset('images/logo1.png') }}" class="logo" alt="">
            <h1 class="header-third">
                Gabung e-siswa
            </h1>
            <p class="subheader">
                Selamat Datang di e-siswa. Silahkan masukan email dan password
            </p>
            <p>
                <a class="btn btn-border btn-google-login" href="#">
                    <img src="{{ asset('images/ic_google.svg') }}" class="icon" alt=""> Masuk dengan Google
                </a>
            </p>
            <img src="{{ asset('images/atau.png') }}" class="atau" alt="">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Masukan Email">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Masukan Sandi">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-login" type="button">Masuk</button>
            </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>