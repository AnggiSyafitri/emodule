<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Kita</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?=base_url("assets/images/logo/fav.png")?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendors/bootstrap-icons/bootstrap-icons.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/app.css")?>">
</head>

<body>
    <div id="app">
        <div class="container-fluid layout-horizontal">
            <header class="mb-5">
        <div class="container">
            <div style="width: 100%;text-align: center">
                <a href="javascript:void(0)">
                    <img style="width: 20%" src="assets/images/logo/logo-big.png" alt="Logo">
                </a>
            </div>
        </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <li class="menu-item  ">
                    <a href="#" class='menu-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=base_url("pendaftaran")?>" class='menu-link'>
                        <i class="bi bi-pen"></i>
                        <span>Pendaftaran Siswa Baru</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=base_url("pendaftaran/check")?>" class='menu-link'>
                        <i class="bi bi-check-circle"></i>
                        <span>Cek Status Pendaftaran</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=base_url("admin")?>" class='menu-link'>
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>Halaman Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
            
<div class="page-heading">

    <section class="section">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-2">
                <div class="card">
          <div class="card-body">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/samples/1.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/samples/2.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card">
                <div class="card-header">
                    <h4>Pendaftar baru baru ini</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/4.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/5.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Dean Winchester</h5>
                            <h6 class="text-muted mb-0">@imdean</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/1.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">John Dodol</h5>
                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/5.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Dean Winchester</h5>
                            <h6 class="text-muted mb-0">@imdean</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/4.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class="btn btn-block btn-xl btn-light-primary font-bold mt-3">dan 50+ Pendaftar Lainnya</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2 mt-5">
                <div class="col-12 text-center">
                    <h3>Pilihan Paket Kelas</h3>
                    <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                        container with multiple variants and options.</p>
                </div>
                <div class="pricing container">
                    <div class="row align-items-center">
                        <div class="col-md-4 px-0">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Sekolah Regular</h4>
                                    <p class="text-center">A standart features you can get</p>
                                </div>
                                <h1 class="price">$100</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-primary btn-block">Mendaftar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card card-highlighted">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Sekolah Full Day</h4>
                                    <p></p>
                                </div>
                                <h1 class="price text-white">$150</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-outline-white btn-block">Mendaftar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Kelas Privat</h4>
                                    <p class="text-center">A higher features you will need</p>
                                </div>
                                <h1 class="price">$$$</h1>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                    <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-primary btn-block">Mendaftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2 mt-5">
                <div class="col-12 text-center">
                    <h3>Ikuti Artikel Terbaru dari Blog Kami</h3>
                    <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content
                        container with multiple variants and options.</p>
                </div>
                <div class="row match-height ">
            <div class="col-12">
                <div class="card-group">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/1.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/2.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/3.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/4.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>
            <footer>
                <div class="container mt-5">
                <div class="footer clearfix mt-5 mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Sekolah Kita</p>
                    </div>
                    <div class="float-end">
                        <p>Dibuat oleh <a
                                href="http://ahmadsaugi.com">Anggi Safitri</a></p>
                    </div>
                </div>
            </div>
            </footer>
</div>

        </div>
    </div>
    <script src="<?=base_url("assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>
    <script src="<?=base_url("assets/js/bootstrap.bundle.min.js")?>"></script>
    <script src="<?=base_url("assets/js/mazer.js")?>"></script>
</body>

</html>
