<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/select2/dist/css/select2.min.css');?>">
<script type="text/javascript" src="<?= base_url('assets/vendors/select2/dist/js/select2.full.min.js');?>"></script>
<style type="text/css">
.select2-container{ width: 100% !important; z-index:99999999;}
.select2-container--default .select2-selection--multiple .select2-selection__choice{color:red;}
</style>
<script type="text/javascript">
  var datapos_admin = {}
  function datapos(){
    return datapos_admin;
  }

  function adminPDF(elm){
    var tr = $(elm).parents('tr')
    var data = tableModules12937.row(tr).data()
    openModal({
      title:'Upload PDF',
      body:`<div class="form-group">
              <label >PDF :</label>
              <input type="file" name="file" value="`+`" class="form-control" accept=".pdf,application/pdf">
          </div>
          `,
      footer:'<button type="button" id="btnSave" onclick="savePDF(\''+data.kode+'\')" class="btn btn-primary">Save</button>',
    });
  }

  function savePDF(kode){
    var datapos = new FormData();
      datapos.append('kode', kode);
      
      if ($('input[name="file"]')[0].files.length) {
          datapos.append('file', $('input[name="file"]')[0].files[0]);
      }

      $.ajax({
        url : '<?=base_url("admin/api/updatepdf/mod")?>',
        type: "POST",
        data: datapos,
        dataType: "JSON",
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(data)
        {
          if(data.success){
               closeModal();
               reload_tableModules12937();
               swal(
                'Good job!',
                data.message,
                'success'
                )

             }else{
              swal(
                'Error!',
                data.message,
                'error'
                )
             }

             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
  }

  function saveCover(kode){
    var datapos = new FormData();
      datapos.append('kode', kode);
      
      if ($('input[name="cover"]')[0].files.length) {
          datapos.append('cover', $('input[name="cover"]')[0].files[0]);
      }

      $.ajax({
        url : '<?=base_url("admin/api/updatecover/mod")?>',
        type: "POST",
        data: datapos,
        dataType: "JSON",
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(data)
        {
          if(data.success){
               closeModal();
               reload_tableModules12937();
               swal(
                'Good job!',
                data.message,
                'success'
                )

             }else{
              swal(
                'Error!',
                data.message,
                'error'
                )
             }

             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
  }

  function adminCover(elm){
    var tr = $(elm).parents('tr')
    var data = tableModules12937.row(tr).data()
    openModal({
      title:'Upload Cover',
      body:`<div class="form-group">
              <label >Cover :</label>
              <input type="file" name="cover" value="`+`" class="form-control" accept=".jpg,.png,.jpeg,application/pdf,image/jpg,image/jpeg,image/png">
          </div>`,
      footer:'<button type="button" id="btnSave" onclick="saveCover(\''+data.kode+'\')" class="btn btn-primary">Save</button>',
    });
  }

  function action_Modules12937(elm){
    /*<?=$kodetable?>.search( "" ).draw();
      var len = String(<?=$kodetable?>.data().length);*/

      if(elm){
          var tr = $(elm).parents('tr')
          var data = tableModules12937.row(tr).data()
      }

      openModal({
      title:((!elm) ? 'Tambah ':'Perbarui ')+" Data Modul",
      body:`<form action="javascript:void(0)" id="form">
            <input type="hidden" value="`+((data) ? data.kode:'new')+`" name="kode" class="form-control">
            <div class="box-body">
                <div class="row">
                <div class="form-group">
                    <label>**) Nama Modul:</label>
                    <input required="required" type="text" name="name" id="" class="form-control" value="`+((data) ? data.name:'')+`" placeholder="Masukkan Nama...">
                </div>

                <div class="form-group">
                    <label>**) Deskripsi:</label>
                    <textarea required="required" name="desc" class="form-control" value="">`+((data) ? data.name:'')+`</textarea>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="NamaGuru">**) Kategori :</label>
                      <select name="kategori" class="form-control" required="">
                      <?php foreach($kategori as $lk){ ?>
                      <option value="<?=$lk->kode;?>"><?=$lk->name;?></option>
                      <?php } ?>
                      </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="NamaGuru">**) Kelas :</label>
                      <select name="kelas" class="form-control" required="">
                      <?php foreach($kelas as $lk){ ?>
                      <option value="<?=$lk->kode;?>"><?=$lk->name;?></option>
                      <?php } ?>
                      </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="NamaGuru">**) Mapel :</label>
                      <select name="mapel" class="form-control" required="">
                      <?php foreach($mapel as $lk){ ?>
                      <option value="<?=$lk->kode;?>"><?=$lk->name;?></option>
                      <?php } ?>
                      </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="NamaGuru">**) Kompetensi :</label>
                      <select name="kompetensi" class="form-control" required="">
                      <?php foreach($kompetensi as $lk){ ?>
                      <option value="<?=$lk->kode;?>"><?=$lk->name;?></option>
                      <?php } ?>
                      </select>
                </div>
                </div>

                  <div class="col-md-12">
                  <hr />
                    <div class="form-group text-red">
                    <p>**) Harus diisi.</p>
                  </div>
                  </div>
                </div>
              </div>
          </form>`,
      footer:((!elm) ? '<button type="button" id="btnSave" onclick="saveModules12937()" class="btn btn-primary">Save</button> ':'<button onclick="saveModules12937(this)"  type="button" class="btn btn-warning">Update</button> ')+`
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>`,

    });


            $('select[name="kategori"]').select2();
            $('select[name="kelas"]').select2();
            $('select[name="mapel"]').select2();
            $('select[name="kompetensi"]').select2();
            console.log("tested")
      if(data){
        $('select[name="mapel"]').val(data.mapel)
      }
  }


  function columnModules12937(){
    var c = columndefaultModules12937();
    c.push({ 
            "targets": [ 4 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.namakategori).toUpperCase();
                  }  
          });
    c.push({ 
            "targets": [ 5 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.namakelas).toUpperCase();
                  }  
          });
    c.push({ 
            "targets": [ 6 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.namamapel).toUpperCase();
                  }  
          });
    c.push({ 
            "targets": [ 7 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.namakompetensi).toUpperCase();
                  }  
          });
    c.push({ 
            "targets": [ 1 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return  '<img class="img img-responsive" style="width:120px" src="<?=base_url("assets/docs/cover/")?>'+row.cover+'" onerror="this.onerror=null;this.src=\'<?=base_url("assets/images/book_default.png")?>\';"> <br /><br />'+
                   '<button type="button" id="btnSave" onclick="adminPDF(this)" class="btn btn-'+((row.file)?'success':'primary')+'">Ubah PDF</button> <br /><br />'+
                   '<button type="button" id="btnSave" onclick="adminCover(this)" class="btn btn-'+((row.cover)?'success':'primary')+'">Ubah COVER</button> '
                   ;
          }  
          });
    c.push({ 
            "targets": [ 2 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.name).toUpperCase();
                  }  
          });
    c.push({ 
            "targets": [ 3 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                  return row.desc.split(/\s+/).slice(0,20).join(" ")+"..."
                  }  
          });
    c.push({ 
            "targets": [ 8 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                  return "views: "+row.views+"<br />downloads:"+row.downloads
                  }  
          });
  return c;
  }

</script>


<div class="container-fluid px-4">
                        <h1 class="mt-4">Modul</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url();?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Modul</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Modul
                            </div>
                            <div class="card-body">
                                <?php $this->load->view("template/_crud",array(
                "title"=>"Modul",
                "kode"=>"Modules12937",
                "dataapi"=>"admin/api/get/mod",
                "urladd"=>"admin/api/add/mod",
                "urlupdate"=>"admin/api/update/mod",
                "urldelete"=>"admin/api/delete/mod",
                "table_head"=>array(
                "No.",
                "Cover",
                "Nama",
                "Deskripsi",
                "Kategori",
                "Kelas",
                "Mapel",
                "Kompetensi",
                "Statistik",
                "#",
                )
              ))?>
                            </div>
                        </div>
                    </div>


<script>
    $(document).ready(function(){
        $('.reset').on('click', function(e){
            e.preventDefault();
            Swal.fire({
                type: 'question',
                title: 'Reset Aplikasi',
                text: 'Anda yakin akan menghapus semua data ?',
                showCancelButton: true,
                confirmButtonText: 'RESET'
            }).then((result) => {
                if (result.value) {
                    location.href = '<?=base_url("admin/teser");?>';
                }
            });
        });
    });
</script>