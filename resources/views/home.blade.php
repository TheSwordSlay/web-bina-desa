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
                <a class="btn" style="background-color: #9EDDFF;" href="#" role="button">Selengkapnya</a>
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
    <section class="penjelasan" style="background-color: #9EDDFF;">
        <div class="container-fluid">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-md-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid enim, culpa quod quibusdam ipsum iure autem, doloribus debitis quidem quasi odit tenetur deserunt odio sed. Quia quis error unde cumque officiis temporibus illo molestiae recusandae impedit laudantium vero deleniti eum, doloremque dignissimos voluptates esse, cum hic modi nam quidem. A atque reprehenderit maxime magnam distinctio cumque minus necessitatibus autem magni nam, suscipit ratione perspiciatis praesentium. Dicta, voluptates accusantium optio error dolor voluptatem minima officiis totam suscipit officia aut eligendi repellat enim debitis praesentium iure corrupti nostrum quas labore fugiat cumque quidem veritatis. Culpa exercitationem delectus reiciendis. Dolore similique officiis pariatur temporibus minima? Qui quos quaerat fuga minima animi, labore quam ab distinctio, soluta eos ipsam! Quis recusandae, accusantium at nesciunt amet, laborum et iusto soluta in laudantium ex praesentium cum? Consectetur, inventore accusantium autem asperiores consequuntur corrupti qui laboriosam nostrum cum ratione, magni harum nihil eligendi soluta tempore cupiditate in ducimus distinctio debitis. Voluptates dicta modi nemo, facilis tempore blanditiis ex ipsum cumque sapiente illo, ipsa, fuga quos enim repudiandae eos eligendi dolorem impedit consequatur asperiores voluptatem obcaecati. Fugiat distinctio sed, veritatis mollitia ducimus natus laborum quibusdam nisi inventore error quidem tempore laudantium, pariatur neque aperiam cumque ipsa repellendus.
                </div>
                <div class="paralax col-md-6 mt-5 mb-5 rounded-5"></div>
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