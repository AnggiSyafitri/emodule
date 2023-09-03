<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link <?=(($content === "" || $content === "utama")?'active':'')?>" href="<?=base_url("/admin")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 
                            </a>
                            <div class="sb-sidenav-menu-heading">Modules</div>
                            <a class="nav-link <?=(($content === "kd")?'active':'')?>" href="<?=base_url("/admin/page/kd")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-ribbon"></i></div>
                                Kompetensi Dasar
                            </a>
                            <a class="nav-link <?=(($content === "mapel")?'active':'')?>" href="<?=base_url("/admin/page/mapel")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Mapel
                            </a>
                            <a class="nav-link <?=(($content === "kategori")?'active':'')?>" href="<?=base_url("/admin/page/kategori")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Kategori
                            </a>
                            <a class="nav-link <?=(($content === "kelas")?'active':'')?>" href="<?=base_url("/admin/page/kelas")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chess-queen"></i></div>
                                Kelas
                            </a>
                            <a class="nav-link <?=(($content === "mod")?'active':'')?>" href="<?=base_url("/admin/page/mod")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Modul
                            </a>
                            <div class="sb-sidenav-menu-heading">System</div>
                            <a class="nav-link <?=(($content === "admin")?'active':'')?>" href="<?=base_url("/admin/page/admin")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manajeman Admin
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div><?=$account->name?>
                    </div>
                </nav>