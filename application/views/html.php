<!doctype html>
<head>
	<title>Brigjend Katamso</title>
	<?php $this->load->view("layouts/style")?>
</head>
<body class="tg-home tg-homevtwo">

<!--************************************
		Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
<?php $this->load->view("layouts/navbar");?>

<?php 
$this->load->view("contents/".$content);
?>

<?php $this->load->view("layouts/footer");?>
</div>
<!--************************************
        Wrapper End
*************************************-->
<?php $this->load->view("layouts/script")?>
</body>
</html>