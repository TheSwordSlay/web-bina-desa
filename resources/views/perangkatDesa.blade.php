<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Desa</title>

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- lokal css  -->
    <link rel="stylesheet" href="css/perangkatDesa.css">
</head>

<body>
    <!-- navbar  -->
    @include('navbar')
    <!-- navbar end  -->

    <!-- perangkat desa  -->
    <div id="carouselExampleCaptions" class="carousel slide custom-carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Sarkowi.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>SARKOWI, S.Sos</h5>
                    <p>NIK : 1610020203650000</p>
                    <p>Kepala Desa</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/AndiSyaryono.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Andi Syaryono, S.Pd</h5>
                    <p>NIK : 1610022505750000</p>
                    <p>KAUR Keuangan</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/EdiSusanto.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Edi Susanto</h5>
                    <p>NIK : 1610022512820001</p>
                    <p>KAUR TU/Umum</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Zulkardi.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Zulkardi</h5>
                    <p>NIK : 1610020704083385</p>
                    <p>KAUR Perencanaan</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/DorikParizal.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Dorik Farizal</h5>
                    <p>NIK : 1610020902220001</p>
                    <P>KASI Pelayanan</P>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/AhmKodri.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Ahmad Kodri</h5>
                    <p>NIK : 1610022811790002</p>
                    <p>KASI Kesejahteraan</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Misroni.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Misroni</h5>
                    <p>NIK : 1610021306710001</p>
                    <p>KADUS I</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Syamsuri.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Syamsuri</h5>
                    <p>NIK : 1610022111740001</p>
                    <p>KADUS II</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- perangkat desa end  -->

    <!-- footer  -->
    @include('footer')
    <!-- footer end  -->

    <!-- bootstrap.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>