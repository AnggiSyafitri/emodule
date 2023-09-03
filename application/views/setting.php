<script type="text/javascript">
  var datapos_admin = {}
  function datapos(){
    return datapos_admin;
  }

  function adminDetail(elm){
    var tr = $(elm).parents('tr')
    var data = tableadmin_123.row(tr).data()
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

  function action_admin_123(elm){
    /*<?=$kodetable?>.search( "" ).draw();
      var len = String(<?=$kodetable?>.data().length);*/

      if(elm){
          var tr = $(elm).parents('tr')
          var data = tableadmin_123.row(tr).data()
      }

      openModal({
      title:((!elm) ? 'Tambah ':'Perbarui ')+" Data <?=$title?>",
      body:`<form action="javascript:void(0)" id="form">
            <input type="hidden" value="`+((data) ? data.id:'new')+`" name="id" class="form-control">
            <div class="box-body">
                <div class="row">
                <div class="form-group">
                    <label for="Namaadmin">**) Nama :</label>
                    <input required="required" type="text" name="nama" id="" class="form-control" value="`+((data) ? data.nama:'')+`" placeholder="Masukkan Nama admin...">
                </div>
                <div class="form-group">
                    <label for="User">**) Username :</label>
                    <input `+((!elm) ? '':'readonly="readonly"')+` required="required" type="text" name="username" value="`+((data) ? data.username:'')+`" class="form-control" placeholder="Masukkan Username admin...">
                </div>
                <div class="form-group">
                    <label for="Password">**) Password :</label>
                    <input required="required" type="text" name="password" value="`+((data) ? data.password:'')+`" class="form-control" placeholder="Masukkan Password admin...">
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
      footer:((!elm) ? '<button type="button" id="btnSave" onclick="saveadmin_123()" class="btn btn-primary">Save</button> ':'<button onclick="saveadmin_123(this)"  type="button" class="btn btn-warning">Update</button> ')+`
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>`,
    });

      if(data){
        $('select[name="mapel"]').val(data.mapel)
      }
  }


  function columnadmin_123(){
    var c = columndefaultadmin_123();
    c.push({ 
            "targets": [ -2 ], //last column
            "orderable": false, //set not orderable
            "render": function ( data, type, row, meta ) {
                        return '<button onclick="return adminDetail(this)" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> Lihat</button>'
                      }
          },);
    c.push({ 
            "targets": [ 1 ], //last column
            "orderable": true, //set not orderable
            render: function (data, type, row, meta) {
                   return String(row.nama).toUpperCase();
                  }  
          });
  return c;
  }

</script>


<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">
            Administrator
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
              <?php $this->load->view("template/_crud",array(
                "title"=>"Admin",
                "kode"=>"admin_123",
                "dataapi"=>"admin/data_admin",
                "urladd"=>"tambah_admin",
                "urlupdate"=>"update_admin",
                "urldelete"=>"hapus_admin",
                "table_head"=>array(
                "No.",
                "Nama",
                "Info",
                "#",
                )
              ))?>
            </div>
        </div>
    </section>
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