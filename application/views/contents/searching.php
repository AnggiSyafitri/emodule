<section class="tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-sectionhead">
							<h2><span>Kolom</span>Pencarian</h2>
							<!-- <a class="tg-btn" href="javascript:void(0);">Lihat Selengkapnya</a> -->
						</div>
					</div>
				</div>
				<div class="row">
					<form action="<?=base_url("search")?>" method="GET">
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="category" class="font-weight-bold">Kategori</label>
					<select name="category" id="category" class="typeahead form-control">
						<option value="">-- Semua --</option>
						<?php foreach($kategori as $key => $value):?>
								<option <?=($this->input->get("category") === $value->kode) ? 'selected="selected"':''; ?> value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
						</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="class" class="font-weight-bold">Kelas</label>
					<select name="class" id="class" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($kelas as $key => $value):?>
								<option  <?=($this->input->get("class") === $value->kode) ? 'selected="selected"':''; ?> value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="subject" class="font-weight-bold">Mata Pelajaran</label>
					<select name="subject" id="subject" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($mapel as $key => $value):?>
								<option <?=($this->input->get("subject") === $value->kode) ? 'selected="selected"':''; ?> value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="competence" class="font-weight-bold">Kompetensi Dasar</label>
					<select name="competence" id="competence" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($kompetensi as $key => $value):?>
								<option <?=($this->input->get("competence") === $value->kode) ? 'selected="selected"':''; ?> value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-3" style="margin-bottom: 10px;">
					<label for="keyword" class="font-weight-bold">Kata Kunci</label>
										<input type="text" <?=($this->input->get("keyword")) ? 'value="'.$this->input->get("keyword").'"':''; ?> class="typeahead form-control" name="keyword" id="keyword" placeholder="Kata Kunci" value="">
				</div>
				<div class="col-md-1 text-center" style="margin-bottom: 10px;">
					<label for="submit" class="font-weight-bold hidden-xs">&nbsp;</label>
					<button type="submit" class="btn btn-primary" style="padding: 9px 12px;"><i class="fa fa-search"></i> Cari</button>
				</div>
				</form>
				</div>
				<hr>
			</div>
		</section>
		<!--************************************
				Berdasarkan Kelas Start
		*************************************-->
				<div class="tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right" style="border: 1px dashed #d9d9d9;">
							<div id="tg-content" class="tg-content">
								<div class="tg-productgrid">
									<div class="tg-refinesearch">
										<span><h4 style="margin:0;">Menampilkan <strong><?=count($result)?></strong> hasil pencarian</h4></span>
									</div>

                            
                            <?php foreach($result as $key => $value):?>
																		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
										<div class="tg-postbook">
											<figure class="tg-featureimg" style="min-height: 235px;">
												<div class="tg-bookimg">
													<div class="tg-frontcover"><img src="<?=base_url("assets/docs/cover/".$value->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$value->cover?>"></div>
													<div class="tg-backcover"><img src="<?=base_url("assets/docs/cover/".$value->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$value->cover?>"></div>
												</div>
												<a class="tg-btnaddtowishlist" href="<?=base_url("detail/".$value->kode)?>">
													<i class="icon-search"></i>
													<span>lihat detil</span>
												</a>
											</figure>
											<div class="tg-postbookcontent">
												<ul class="tg-bookscategories">
																																							<li>-</li>												</ul>
												<div class="tg-themetagbox"><span class="tg-themetag"><?=$value->namakategori?></span></div>
												<div class="tg-booktitle">
													<h3><a href="<?=base_url("detail/".$value->kode)?>" data-toogle="tooltip" data-placement="bottom" title="<?=$value->name?>"><?=$value->name?></a></h3>
												</div>
												<ul class="tg-postmetadata">
													<li><a href="javascript:void(0);" title="Total Pembaca"><i class="fa fa-eye"></i><i><?=$value->views?></i></a></li>
													<li><a href="javascript:void(0);" title="Total Unduhan"><i class="fa fa-download"></i><i><?=$value->downloads?></i></a></li>
												</ul>
												<a class="tg-btn tg-btnstyletwo" href="<?=base_url("detail/".$value->kode)?>">
													<i class="fa fa-book"></i>
													<em>Lihat</em>
												</a>
											</div>
										</div>
									</div>
									<?php endforeach;?>



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