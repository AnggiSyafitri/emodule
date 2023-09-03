<!--************************************
			Main Start
	*************************************-->
	<main id="tg-main" class="tg-main tg-haslayout">
		<!--************************************
				Berdasarkan Kelas Start
		*************************************-->
		<div class="tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-productdetail">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg"><img src="<?=base_url("assets/docs/cover/".$current->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$current->cover?>" ></figure>
												<div class="tg-postbookcontent">
																											<ul class="tg-delevrystock" style="border-bottom: 1px solid #d9d9d9;">
															<li><i class="icon-eye"></i><span>dibaca sebanyak <em id="total_read"><?=$current->views?></em> kali</span></li>
															<li><i class="icon-download"></i><span>diunduh sebanyak <em id="total_download"><?=$current->downloads?></em> kali</span></li>
														</ul>
														<a class="tg-btn tg-active tg-btn-lg" href="javascript:void(0);" onclick="read_book('<?=$current->kode?>','PDF','<?=base_url("assets/docs/pdf/".$current->file)?>')"><i class="fa fa-book"></i> Baca</a>
														
														<a class="tg-btnaddtowishlist"  href="javascript:void(0);" onclick="download_book('<?=$current->kode?>','<?=base_url("assets/docs/pdf/".$current->file)?>')">
															<span><i class="fa fa-download"></i> Unduh</span>
														</a>
																									</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
											<div class="tg-productcontent">
												<ul class="tg-bookscategories">
													<li><a href="search?type=UERG">PDF</a></li>																																						</ul>
												<div class="tg-themetagbox"><span class="tg-themetag"><?=$current->namakategori?></span></div>
												<div class="tg-booktitle">
													<h3><?=$current->name?></h3>
												</div>
												<div class="tg-description" style="border-bottom: 1px solid #dbdbdb;">
													<p><?=$current->desc?></p>
												</div>
												<div class="tg-share">
													<span>Bagikan:</span>
													<ul class="tg-socialicons">
														<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
														<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
														<li class="tg-youtube"><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
														<li class="tg-instagram"><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<!-- <div class="tg-widget tg-widgetsearch">
									<form class="tg-formtheme tg-formsearch">
										<div class="form-group">
											<button type="submit"><i class="icon-magnifier"></i></button>
											<input type="search" name="search" class="form-group" placeholder="Search by title, author, key...">
										</div>
									</form>
								</div> -->
								<div class="tg-widget tg-catagories">
									<div class="tg-widgettitle">
										<h3>Kategori</h3>
									</div>
									<div class="tg-widgetcontent">
																				<ul>
																					
																					<?php foreach($kategori as $key => $value):?>
																							<li><a href="<?=base_url("search/".$value->kode)?>"><span><?=$value->name?></span></a></li>
																							<?php endforeach;?>
																					</ul>
										
																			</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Berdasarkan Kelas End
		*************************************-->

		<?php $this->load->view("layouts/footlight")?>
		<?php $this->load->view("layouts/testi")?>
	</main>
	<!--************************************
			Main End
	*************************************-->
	<!-- <div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="modalBookLabel" aria-hidden="true">
		<div class="modal-dialog" style="width: 95%;">
			<div class="row">
				<div class="col-md-12">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; right: 0; top: 0; color: #fff; opacity: 0.8; font-size: 40px;">×</button>
					<div id="bookId" style="height: 90vh;"></div>
				</div>
			</div>
        </div>
    </div> -->

    <script>
	function read_book(id, jenis, tautan) {
		$.ajax({
			async: false,
            type: 'POST',
            url: '<?=base_url("admin/api/view/mod")?>',
            data: {"kode": id},
            success: function(res) {
				$("#total_read").html(parseInt($("#total_read").html())+1);
				window.open(tautan);
            },
            error: function () {
                swal("Maaf!", "Gagal membuka dokumen!", "error");
            }
        });
		
	}

	function download_book(id, tautan) {
		$.ajax({
			async: false,
            type: 'POST',
            url: '<?=base_url("admin/api/download/mod")?>',
            data: {"kode": id},
            success: function(res) {
				$("#total_download").html(parseInt($("#total_download").html())+1);
				window.open(tautan);
            },
            error: function () {
                swal("Maaf!", "Gagal membuka dokumen!", "error");
            }
        });
		
	}
	// }
</script>