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
                <h1 class="text-light">Selamat Datang di Desa ...</h1>
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
                <iframe class="img-fluid shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254917.2531649013!2d104.4712605954665!3d-3.3298982037273133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bc03f8e742a71%3A0x4f9816f962fcf98c!2sKec.%20Tj.%20Batu%2C%20Kabupaten%20Ogan%20Ilir%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1698764187471!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- maps desa end  -->

    <!-- penjelasan desa  -->
    <section class="penjelasan  bg-primary-subtle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid enim, culpa quod quibusdam ipsum iure autem, doloribus debitis quidem quasi odit tenetur deserunt odio sed. Quia quis error unde cumque officiis temporibus illo molestiae recusandae impedit laudantium vero deleniti eum, doloremque dignissimos voluptates esse, cum hic modi nam quidem. A atque reprehenderit maxime magnam distinctio cumque minus necessitatibus autem magni nam, suscipit ratione perspiciatis praesentium. Dicta, voluptates accusantium optio error dolor voluptatem minima officiis totam suscipit officia aut eligendi repellat enim debitis praesentium iure corrupti nostrum quas labore fugiat cumque quidem veritatis. Culpa exercitationem delectus reiciendis. Dolore similique officiis pariatur temporibus minima? Qui quos quaerat fuga minima animi, labore quam ab distinctio, soluta eos ipsam! Quis recusandae, accusantium at nesciunt amet, laborum et iusto soluta in laudantium ex praesentium cum? Consectetur, inventore accusantium autem asperiores consequuntur corrupti qui laboriosam nostrum cum ratione, magni harum nihil eligendi soluta tempore cupiditate in ducimus distinctio debitis. Voluptates dicta modi nemo, facilis tempore blanditiis ex ipsum cumque sapiente illo, ipsa, fuga quos enim repudiandae eos eligendi dolorem impedit consequatur asperiores voluptatem obcaecati. Fugiat distinctio sed, veritatis mollitia ducimus natus laborum quibusdam nisi inventore error quidem tempore laudantium, pariatur neque aperiam cumque ipsa repellendus.
                </div>
                <div class="paralax col-md-6 mt-5 mb-5 rounded-start-5"></div>
            </div>
        </div>
    </section>
    <!-- penjelasan desa end  -->


    <!-- news -->
    <div class="container text-center">
        <div class="mt-5 pb-4">
            <h1>Berita Terkini</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/berita.jpeg" class="img-fluid rounded-start" alt="foto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news end -->

    <!-- bootstrap.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>