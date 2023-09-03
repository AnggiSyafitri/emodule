<!--************************************
                Random Category Start
        *************************************-->
                
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Koleksi</span>Panduan dan Praktik Baik</h2>
                            <!-- <a class="tg-btn" href="javascript:void(0);">Lihat Selengkapnya</a> -->
                        </div>
                    </div>
                                        <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                                            <?php foreach($headline as $key => $value):?>
                                                <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg" style="min-height: 343px;">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="<?=base_url("assets/docs/cover/".$value->cover)?>" onerror="this.onerror=null;this.src='<?=base_url("assets/images/book_default.png")?>';" alt="<?=$value->cover?>"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p><?=$value->desc?></p>
                                        </div>
                                        <?php 
                                                    $array = explode('.', $value->file);
                                                    $extension = end($array);
                                                    ?>
                                        <strong class="tg-bookpage">Tipe: <?=strtoupper($extension)?></strong>
                                        <strong class="tg-bookcategory">Label: </strong>
                                        <strong class="tg-bookprice">Ket: <i class="fa fa-eye"></i> <?=$value->views?> | <i class="fa fa-download"></i> <?=$value->downloads?></strong>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="<?=base_url("detail/".$value->kode)?>" title="<?=$value->namamapel?> Kelas <?=$value->namakelas?> KD <?=$value->namakompetensi?>"><?=$value->namamapel?> Kelas <?=$value->namakelas?> KD <?=$value->namakompetensi?></a></h3>
                                    </div>
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
        </section>
                <!--************************************
                Random Category End
        *************************************-->