<!--************************************
			Home Slider Start
	*************************************-->
	<div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo tg-haslayout owl-carousel">
		<div class="item" data-vide-bg="poster: <?=base_url("assets/images/slider/img-01.jpg")?>" data-vide-options="position: 0% 50%">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
						<div class="tg-slidercontent">
							<figure class="tg-authorimg"><img src="<?=base_url("assets/images/img1.png")?>" alt="image description"></figure>
							<h1>e-Modul</h1>
							<div class="tg-description">
								<p>Maju Bersama, Hebat Semua!</p>
							</div>
							<div class="tg-btns">
								<a class="tg-btn" href="search.php"><i class="fa fa-search"></i> Temukan e-Modul disini!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" data-vide-bg="poster: <?=base_url("assets/images/slider/img-02.jpg")?>" data-vide-options="position: 0% 50%">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
						<div class="tg-slidercontent">
							<figure class="tg-authorimg"><img src="<?=base_url("assets/images/img1.png")?>" alt="image description"></figure>
							<h1>Panduan dan Praktik Baik</h1>
							<div class="tg-description">
								<p>Maju Bersama, Hebat Semua!</p>
							</div>
							<div class="tg-btns">
								<a class="tg-btn" href="search.php"><i class="fa fa-search"></i> Temukan Panduan dan Praktik Baik disini!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item" data-vide-bg="poster: <?=base_url("assets/images/slider/img-03.jpg")?>" data-vide-options="position: 0% 50%">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
						<div class="tg-slidercontent">
							<figure class="tg-authorimg"><img src="<?=base_url("assets/images/img1.png")?>" alt="image description"></figure>
							<h1>Infografis</h1>
							<div class="tg-description">
								<p>Maju Bersama, Hebat Semua!</p>
							</div>
							<div class="tg-btns">
								<a class="tg-btn" href="search.php"><i class="fa fa-search"></i> Temukan Infografis disini!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--************************************
			Home Slider End
	*************************************-->
	<!--************************************
			Search Engine Start
	*************************************-->
	<section class="tg-sectionspace tg-haslayout" style="margin-bottom: 30px; border-bottom: 1px dashed #dbdbdb;">
		<div class="container">
			<div class="row">
				<form action="<?=base_url("search")?>" method="GET">
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="category" class="font-weight-bold">Kategori</label>
					<select name="category" id="category" class="typeahead form-control">
						<option value="">-- Semua --</option>
						<?php foreach($kategori as $key => $value):?>
								<option value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
						</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="class" class="font-weight-bold">Kelas</label>
					<select name="class" id="class" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($kelas as $key => $value):?>
								<option value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="subject" class="font-weight-bold">Mata Pelajaran</label>
					<select name="subject" id="subject" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($mapel as $key => $value):?>
								<option value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-2" style="margin-bottom: 10px;">
					<label for="competence" class="font-weight-bold">Kompetensi Dasar</label>
					<select name="competence" id="competence" class="typeahead form-control">
						<option value="">-- Semua --</option>
													<?php foreach($kompetensi as $key => $value):?>
								<option value="<?=$value->kode?>" ><?=$value->name?></option>
								<?php endforeach;?>
											</select>
				</div>
				<div class="col-md-3" style="margin-bottom: 10px;">
					<label for="keyword" class="font-weight-bold">Kata Kunci</label>
										<input type="text" class="typeahead form-control" name="keyword" id="keyword" placeholder="Kata Kunci" value="">
				</div>
				<div class="col-md-1 text-center" style="margin-bottom: 10px;">
					<label for="submit" class="font-weight-bold hidden-xs">&nbsp;</label>
					<button type="submit" class="btn btn-primary" style="padding: 9px 12px;"><i class="fa fa-search"></i> Cari</button>
				</div>
				</form>
			</div>
		</div>
	</section>
	<!--************************************
			Search Engine End
	*************************************-->

	<!--************************************
				New Release Start
	*************************************-->
	<section class="tg-sectionspace tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="tg-newrelease">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="tg-sectionhead">
							<h2><span>Koleksi Terbaru</span>Dokumen</h2>
						</div>
						<div class="tg-description">
							<p>Kami menyajikan modul, buku dan infografis dalam bentuk digital untuk memfasilitasi pembelajaran di masa pandemi Covid-19. Dengan demikian, diharapkan bahan pembelajaran tersebut dapat diaplikasikan sebagai alternatif sumber belajar.</p>
						</div>
						<div class="tg-btns">
							<a class="tg-btn tg-active" href="search.php">Lihat Selengkapnya</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="row">
							<div class="tg-newreleasebooks">
								<?php foreach($headline as $key => $value):?>
									<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
										<div class="tg-postbook">
											<figure class="tg-featureimg" style="min-min-height: 235px;">
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
													<?php 
													$array = explode('.', $value->file);
													$extension = end($array);
													?>
													<li><a href="javascript:void(0);"><?=strtoupper($extension)?></a></li>																																						</ul>
												<div class="tg-themetagbox"><span class="tg-themetag"><?=$value->namakategori?></span></div>
												<div class="tg-booktitle">
													<h3><a href="<?=base_url("detail/".$value->kode)?>" data-toogle="tooltip" data-placement="bottom" title="<?=$value->name?>"><?=$value->name?></a></h3>
												</div>
												<ul class="tg-postmetadata">
													<li><a href="javascript:void(0);" title="Total Pembaca"><i class="fa fa-eye"></i><i><?=$value->views?></i></a></li>
													<li><a href="javascript:void(0);" title="Total Unduhan"><i class="fa fa-download"></i><i><?=$value->downloads?></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								<?php endforeach;?>
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			New Release End
	*************************************-->

	<!--************************************
			Main Start
	*************************************-->
	<main id="tg-main" class="tg-main tg-haslayout">
		<!--************************************
				Berdasarkan Kelas Start
		*************************************-->
<?php foreach($kelas as $key => $value):?>
		<section class="tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-sectionhead">
							<h2><span>Koleksi</span>e-Modul kelas <?=$value->name?></h2>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">

<?php 
$books = $this->db->get_where("data_modul",array("kelas"=>$value->kode))->result();
$table = "data_modul";
$this->db->select($table.".*,
data_kelas.name as namakelas,
data_kategori.name as namakategori,
data_mapel.name as namamapel,
data_kompetensi.name as namakompetensi");
$this->db->from($table);
$this->db->join("data_kelas","data_kelas.kode=".$table.".kelas AND data_kelas.status='1'","left");
$this->db->join("data_kategori","data_kategori.kode=".$table.".kategori AND data_kategori.status='1'","left");
$this->db->join("data_mapel","data_mapel.kode=".$table.".mapel AND data_mapel.status='1'","left");
$this->db->join("data_kompetensi","data_kompetensi.kode=".$table.".kompetensi AND data_kompetensi.status='1'","left");

$this->db->where(array("kelas"=>$value->kode));
$books = $this->db->get()->result();
foreach($books as $keys => $values):?>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg" style="min-height: 235px;">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="<?=base_url("assets/docs/cover/".$values->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$values->cover?>"></div>
											<div class="tg-backcover"><img src="<?=base_url("assets/docs/cover/".$values->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$values->cover?>"></div>
										</div>
										<a class="tg-btnaddtowishlist" href="<?=base_url("detail/".$values->kode)?>">
											<i class="icon-search"></i>
											<s`pan>lihat detil</span>
										</a>
									</figure>
									<div class="tg-postbookcontent">
										<ul class="tg-bookscategories">
											<li><a href="javascript:void(0);">Kelas <?=$values->namakelas?></a></li>											
											<li><a href="javascript:void(0);"><?=$values->namakompetensi?></a></li>
										</ul>
										<div class="tg-themetagbox"><span class="tg-themetag"><?=$values->namakategori?></span></div>
										<div class="tg-booktitle">
											<h3><a href="<?=base_url("detail/".$values->kode)?>" data-toogle="tooltip" data-placement="bottom" title="<?=$values->namamapel?> Kelas <?=$values->namakelas?> KD <?=$values->namakompetensi?>"><?=$values->namamapel?> Kelas <?=$values->namakelas?> KD <?=$values->namakompetensi?></a></h3>
										</div>
										<ul class="tg-postmetadata">
											<li><a href="javascript:void(0);" title="Total Pembaca"><i class="fa fa-eye"></i><i><?=$values->views?></i></a></li>
											<li><a href="javascript:void(0);" title="Total Unduhan"><i class="fa fa-download"></i><i><?=$values->downloads?></i></a></li>
										</ul>
										<a class="tg-btn tg-btnstyletwo" href="<?=base_url("detail/".$values->kode)?>">
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
			</div>
		</section>
<?php endforeach;?>
				

				

				<!--************************************
				Berdasarkan Kelas End
		*************************************-->

		
		

		<?php $this->load->view("layouts/footlight")?>
		<?php $this->load->view("layouts/testi")?>
	</main>
	<!--************************************
			Main End
	*************************************-->
    