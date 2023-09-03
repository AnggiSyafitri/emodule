<script type="text/javascript">
  var datapos_admin = {}
  function datapos(){
    return datapos_admin;
  }

  function adminDetail(elm){
    var tr = $(elm).parents('tr')
    var data = tableKategori29399.row(tr).data()
    openModal({
      title:'<i class="fa fa-user"></i> '+String(data.nama).toUpperCase(),
      body:`<div class="form-group">
              <label for="password">Username :</label>
              <input type="text" value="`+data.username+`" class="form-control" disabled>
          </div><div class="form-group">
              <label for="password">Password :</label>
              <input type="text" value="`+data.password+`" class="form-control" disabled>
          </div>`,
      footer:'',
    });
  }

  function action_Kategori29399(elm){
    /*<?=$kodetable?>.search( "" ).draw();
      var len = String(<?=$kodetable?>.data().length);*/

      if(elm){
          var tr = $(elm).parents('tr')
          var data = tableKategori29399.row(tr).data()
      }

      openModal({
      title:((!elm) ? 'Tambah ':'Perbarui ')+" Data Kategori",
      body:`<form action="javascript:void(0)" id="form">
            <input type="hidden" value="`+((data) ? data.kode:'new')+`" name="kode" class="form-control">
            <div class="box-body">
                <div class="row">
                <div class="form-group">
                    <label>**) Nama Kategori:</label>
                    <input required="required" type="text" name="name" id="" class="form-control" value="`+((data) ? data.name:'')+`" placeholder="Masukkan Nama...">
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
      footer:((!elm) ? '<button type="button" id="btnSave" onclick="saveKategori29399()" class="btn btn-primary">Save</button> ':'<button onclick="saveKategori29399(this)"  type="button" class="btn btn-warning">Update</button> ')+`
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>`,
    });

      if(data){
        $('select[name="mapel"]').val(data.mapel)
      }
  }


  function columnKategori29399(){
    var c = columndefaultKategori29399();
    c.push({ 
            "targets": [ 1 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.name).toUpperCase();
                  }  
          });
  return c;
  }

</script>


<div class="container-fluid px-4">
                        <h1 class="mt-4">Kategori</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url();?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Kategori
                            </div>
                            <div class="card-body">
                                <?php $this->load->view("template/_crud",array(
                "title"=>"Kategori",
                "kode"=>"Kategori29399",
                "dataapi"=>"admin/api/get/kategori",
                "urladd"=>"admin/api/add/kategori",
                "urlupdate"=>"admin/api/update/kategori",
                "urldelete"=>"admin/api/delete/kategori",
                "table_head"=>array(
                "No.",
                "Nama Kategori",
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