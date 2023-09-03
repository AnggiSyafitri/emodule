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
                    <h1 class="auth-title">Pendaftaran <br />Siswa Baru</h1>
                    <p class="auth-subtitle mb-5">Pendaftaran Siswa Baru online Sekolah Kita.</p>
                    <?php  if ($this->session->flashdata("message")):?>
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Selamat</h4>
                            <p><?=$this->session->flashdata("message")?></p>
                        </div>
                    <?php endif; ?>
                    <?php $attribute = array('class' => 'color', 'id' => 'user' );
                    echo form_open('pendaftaran', $attribute); ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="namasiswa" value="<?=set_value('namasiswa')?>" type="text" class="form-control form-control-xl" placeholder="Nama pendaftar">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <?php echo form_error('namasiswa'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('tampatlahir')?>" name="tampatlahir" type="text" class="form-control form-control-xl" placeholder="Tempat lahir">
                                    <div class="form-control-icon">
                                        <i class="bi bi-map"></i>
                                    </div>
                                </div>
                            <?php echo form_error('tampatlahir'); ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('tanggallahir')?>" name="tanggallahir" type="date" class="form-control form-control-xl" placeholder="23/05/1999">
                                    <div class="form-control-icon">
                                        <i class="bi bi-calendar-date-fill"></i>
                                    </div>
                                </div>
                            <?php echo form_error('tanggallahir'); ?>
                            </div>
                        </div>
                        <div class="form-group position-relative mb-4">
                            <textarea name="alamat" class="form-control form-control-xl" placeholder="Alamat"><?=set_value('alamat')?></textarea>
                            <?php echo form_error('alamat'); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('namaayah')?>" name="namaayah" type="text" class="form-control form-control-xl" placeholder="Nama ayah">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <?php echo form_error('namaayah'); ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('namaibu')?>" name="namaibu" type="text" class="form-control form-control-xl" placeholder="Nama ibu">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <?php echo form_error('namaibu'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('email')?>" name="email" type="email" class="form-control form-control-xl" placeholder="myemail@domain.com">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input value="<?=set_value('no')?>" name="no" type="text" class="form-control form-control-xl" placeholder="Nomor whatsapp">
                                    <div class="form-control-icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                </div>
                                <?php echo form_error('no'); ?>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input <?=(set_value('agreement')?'checked="checked"':'')?>  class="form-check-input me-2" type="checkbox" value="yes" name="agreement" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Saya yakin telah mengisi data dengan benar.
                            </label>
                        </div>
                        <?php echo form_error('agreement'); ?>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Mendaftar sbg siswa baru</button>
                        <a href="<?=base_url("/")?>" class="btn btn-secondary btn-block btn-lg mt-2">Kembali ke Halaman Utama</a>
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