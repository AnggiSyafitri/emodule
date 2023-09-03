<div class="container-fluid px-4">
    <h1 class="mt-4">Akun Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url();?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Akun Saya</li>
    </ol>
    <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal & Akun Info</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                          <?php if($this->session->flashdata('message')):?>
                          <div class="alert alert-success">
                              <h4 class="alert-heading">Berhasil.</h4>
                            Perubahan berhasil disimpan.</p>
                          </div>
                          <?php endif?>
                            <form class="form form-horizontal" method="post" action="<?=base_url("admin/api/update/myaccount")?>">
                                <div class="form-body">
                                    <div class="row">
                                      <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="hidden" value="<?=$account->kode?>" name="kode">
                                            <input type="text" class="form-control" value="<?=$account->username?>" readonly="readonly" name="username">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="name" value="<?=$account->name?>">
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" class="form-control" name="password" placeholder="******">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
