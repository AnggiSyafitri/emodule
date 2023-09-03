<link rel="stylesheet" href="<?= base_url("assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css")?>">
<link rel="stylesheet" href="<?= base_url("assets/vendors/fontawesome/all.min.css")?>">

<script src="<?= base_url("assets/vendors/jquery-datatables/jquery.dataTables.min.js")?>"></script>
<script src="<?= base_url("assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js")?>"></script>
<script src="<?= base_url("assets/vendors/fontawesome/all.min.js")?>"></script>

<?php 

$kodetable = "table".$kode;
$kodefnadd = "action_".$kode;
$kodecolumn = "column".$kode;
$kodehapus = "delete".$kode;
?>
<div class="box box-default">
    <div class="box-header with-border">
        <?php 
          if(isset($urladd)):
          ?>
        <button type="button" onclick="<?=$kodefnadd?>()" class="btn btn-sm btn-flat btn-primary pull-right">
          <i class="fa fa-user-plus"></i> Tambah <?=$title?>
        </button>
        <br />
        <br />
        <?php 
          endif;
          ?>
    </div>
    <div class="box-body">
      <table id="<?=$kodetable?>" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <?php foreach ($table_head as $key => $value):?>
            <th><?=$value?></th>
            <?php endforeach;?>
          </tr>
        </thead>
        <tbody> </tbody>
      </table>
    </div>
</div>

<script type="text/javascript">
      function columndefault<?=$kode;?>(){
        return [{ 
            "targets": [ 0 ], //last column
            "orderable": false, //set not orderable
            render: function (data, type, row, meta) {
                   return (meta.row + meta.settings._iDisplayStart + 1)+".";
                  }  
          },
          <?php 
          if(!isset($action_btn)):
          ?>
          { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            "render": function ( data, type, row, meta ) {
                        return '<button onclick="<?=$kodefnadd?>(this)" type="button" data-toggle="modal" data-target="#editSiswa" class="btn btn-xs btn-secondary" href="#"><i class="fa fa-edit"></i> Edit</button> &nbsp;'+
                                  '<button onclick="return <?=$kodehapus?>(this)" type="button" class="btn btn-xs btn-danger" href="#"><i class="fa fa-times-circle"></i> Hapus</button>'
                      }
          },
          <?php 
          endif;
          ?>
          {
            "defaultContent": "",
            "targets": "_all"
          }];
      }
    var save_method; //for save method string
    var table;

    $(document).ready(function() {
      var tableelem = '#<?=$kodetable?>'
      <?=$kodetable?> = $(tableelem).DataTable({ 
        
        "serverSide": true,
        // "processing": true,
        "paging": true,
        "scrollX": true,
        "searching": { "regex": true },
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
        "pageLength": 10,
        "order": [[ 1, "asc" ]],
        language: {
              searchPlaceholder: "Enter untuk mencari.."
          },

        initComplete: function() {
           var api = this.api();
           $(tableelem+'_filter input')
               .off('.DT')
               .on('keyup.DT', function (e) {
                   if (e.keyCode == 13) {
                       api.search(this.value).draw();
                   }
                   if (e.which == 8 && this.value=="") {
                       api.search(this.value).draw();
                   }
               });
        },
        
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo site_url($dataapi)?>",
          "data": function(d){
             d.datapos = datapos();
          },
          "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": <?=$kodecolumn?>(),

      });
    });

    function reload_table<?=$kode?>()
    {
      <?=$kodetable?>.ajax.reload(null,false); //reload datatable ajax 
    }

    function validationStart(data){
      $('.form-group').removeClass('has-error');
      $('.help-block').remove();
      for(d in data){
        var v = data[d]
        if (v.value=='' && $('[name="'+v.name+'"]').attr('required')) {
        var elm = $('[name="'+v.name+'"]')
        elm[0].focus();
        var parent = elm.parents('.form-group')
        parent.addClass('has-error');
        if(!parent.find('.help-block').length){
            parent.append('<span class="help-block">Harap lengkapi kolom!</span>')
        }
          return false
        }
      }

      return true;
    }

    function save<?=$kode?>(id)
    {
      var url;
      if(!id) 
      {
        url = "<?=isset($urladd) ? $urladd:''?>";
      }
      else
      {
        url = "<?=isset($urlupdate) ? $urlupdate:''?>";
      }

      if(!validationStart($('#form').serializeArray())){
        return false
      }

       // ajax adding data to database
       $.ajax({
        url : "<?php echo base_url("")?>"+url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
          if(data.success){
               closeModal();
               reload_table<?=$kode?>();
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

     function <?=$kodehapus?>(elm)
     {
      var tr = $(elm).parents('tr')
      var data = <?=$kodetable?>.row(tr).data();
      swal({
        title: 'Apakah anda yakin ingin menghapus data?',
        text: " Nama <?=$title?> : "+data.name,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus data!',
        cancelButtonText: 'Batalkan'
      }).then(function(isConfirm) {
        if (!isConfirm.dismiss) {
     // ajax delete data to database
     $.ajax({
      url : "<?=isset($urldelete)?$urldelete:''?>",
      type: "POST",
      data: {id:data.id},
      dataType: "JSON",
      success: function(data)
      {
               reload_table<?=$kode?>();
               swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                );
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

            }
          });
   }
 })
      
    }
</script>