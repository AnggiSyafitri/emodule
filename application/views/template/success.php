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
                    <h1 class="auth-title">Berhasil !!</h1>
                    <p class="auth-subtitle mb-5">Selamat berkas pendaftaran anda telah berhasil dikirim.</p>

                    <div class="alert alert-light">
                        <h4 class="alert-heading">Nomor Pendaftaran.</h4>
                        <p>Simpan nomor pendaftaran anda, gunakan untuk melakukan pengecekan status apakah ananda telah berhasil dinyatakan lolos sebagai siswa.
                            <br />
                            <br />
                        No Pendaftaran: <b><?=$nomor?></b></p>
                    </div>

                    <a href="<?=base_url("/")?>" class="btn btn-secondary btn-block btn-lg mt-2">Kembali ke Halaman Utama</a>
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