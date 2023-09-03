<link href="<?=base_url("assets/images/favicon.ico")?>" rel="shortcut icon">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>eModule</title>
<link href="<?=base_url("assets/css/styles.css")?>" rel="stylesheet" />
<script src="<?=base_url("assets/vendors/jquery/jquery.min.js")?>" crossorigin="anonymous"></script>
<script src="<?=base_url("assets/js/sweetalert2.all.min.js")?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
  function uniq(len){
    var hash = "_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var res = [];
    for (var i = 1; i <= len; i++) {
        res.push(hash[Math.floor((Math.random() / 100 * hash.length) * 100)]);
    }
    return (len) ? res.join("") : "_zyivaApp"
}
	function openModal(opts){
    $('#OneModal').find('.modal-title').html(opts.title);
    $('#OneModal').find('.modal-body').html(opts.body);
    $('#OneModal').find('.modal-footer').html(opts.footer);
    if (opts.type) {
    $('#OneModal').find('.modal-dialog').addClass('modal-'+opts.type);
    }
    $('#OneModal').modal('show');
  }
  function closeModal(opts){
    $('#OneModal').modal('hide');
  }
</script>