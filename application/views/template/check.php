<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Sekolah Kita</title>
    <link rel="icon" type="image/png" href="<?=base_url("assets/images/logo/fav.png")?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendors/bootstrap-icons/bootstrap-icons.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/app.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/pages/auth.css")?>">
</head>
<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-3 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="<?=base_url("assets/images/logo/logo.png")?>" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Check Status Pendaftaran Kamu!</h1>
                    <p class="auth-subtitle mb-5">Semoga kamu bisa menjadi bagian dari Sekolah Kita untuk selalu berpartisipasi dalam meningkatkan mutu pembelajaran di Indonesia.</p>
                    <form action="<?=base_url('pendaftaran/check');?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="kode" type="text" class="form-control form-control-xl" placeholder="Kode unik pendaftaran">
                            <div class="form-control-icon">
                                <i class="bi bi-grid-3x3-gap"></i>
                            </div>
                        </div>
                        <?php if (isset($siswa)) : ?>
                            <div class="alert alert-secondary">
                                <h4 class="alert-heading">Informasi</h4>
                                <p>Nama Pendaftar : <?=$siswa->nama?></p>
                                <p>Status Pendaftaran : <?=($siswa->status=='Y')? 'Berhasil diterima':'Pending';?>  </p>
                            </div>
                        <?php endif;?>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Check Status Pendaftaran Saya</button>
                        <a href="<?=base_url("/")?>" class="btn btn-secondary btn-block btn-lg mt-1">Kembali ke Halaman Utama</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
    </body>

</html>