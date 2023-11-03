<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- lokal css  -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- navbar  -->
    @include('navbar')
    <!-- navbar end  -->

    <!-- home -->
    <section class="home">
        <div class="container-fluid d-flex justify-content-center align-items-center ">
            <div class="text-center">
                <h1 class="text-light">Selamat Datang di Desa Tanjung Laut</h1>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, eius? Obcaecati mollitia eum illum corporis assumenda rerum dolorum autem quibusdam.</p>
                <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- maps & perangkat desa -->
    <section class="map pt-4 mb-5">
        <div class="container text-center pb-4 mb-5">
            <div class="pb-2">
                <h1 class="pb-2">Peta Desa</h1>
            </div>
            <div>
                <iframe class="img-fluid shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31865.212379740562!2d104.63349028662726!3d-3.312679286371968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bc0014382d4f9%3A0x9af087d7116ceb2a!2sTj.%20Laut%2C%20Kec.%20Tj.%20Batu%2C%20Kabupaten%20Ogan%20Ilir%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1698940693646!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- maps desa end  -->

    <!-- penjelasan desa  -->
    <section class="penjelasan  bg-primary-subtle">
        <div class="container-fluid">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-md-6 text-start">
                    <div class="fs-1 fw-bold text-center">Tentang Desa</div>
                    <div class="my-3 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores itaque minus praesentium accusamus aut, assumenda quis? Laborum, quod expedita? Provident deserunt obcaecati adipisci placeat earum aperiam itaque? Sapiente beatae tenetur repudiandae id voluptatem sed dolorem vitae. Voluptates vitae in voluptatem atque iure eaque? Aspernatur voluptate dolor placeat velit ipsum similique eos quia excepturi vel? Modi, non soluta perferendis nisi aspernatur pariatur, amet quia excepturi a natus voluptatibus ducimus beatae assumenda illum cumque delectus, odit autem itaque suscipit tenetur odio rem neque velit voluptates. Laboriosam dolores error omnis fugiat quis quasi officiis repellat consectetur deserunt labore, animi voluptate distinctio sit, ullam ratione cum assumenda sed non rem! Alias molestias debitis odio ipsa sint fuga obcaecati incidunt facere, sunt culpa commodi beatae quasi et ut autem enim non quo fugiat laborum minima eum perspiciatis libero! Magnam culpa, soluta dolore aliquam nobis, dicta minus blanditiis quas, quos alias officiis provident quaerat numquam.</div>
                </div>
                <div class="col-md-6 mt-5 mb-5 rounded-5">
                    <img src="img/bg2.jpg" class="rounded-5 px-3 img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- penjelasan desa end  -->


    <!-- news -->
    <div class="container text-center mb-5">
        <div class="mt-5 pb-4">
            <h1>Berita Terkini</h1>
        </div>
        @include('berita')
    </div>
    <!-- news end -->

    <!-- footer  -->
    @include('footer')
    <!-- footer end  -->

    <!-- bootstrap.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>