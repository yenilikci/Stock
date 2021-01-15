<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <span class="brand-text">Stock</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=IMG_PATH;?>/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$this->myUserInfo['name'];?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-tags"></i>
                        <p>
                            Kategoriler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/category/create" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                    <p>Kategori Oluştur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/category" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Kategori Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-box"></i>
                        <p>
                            Ürünler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/product/create" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                <p>Ürün Oluştur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/product" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Ürün Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-users mr-1"></i><p>
                            Müşteriler
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/customer/create" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                <p>Müşteri Oluştur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/customer" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Müşteri Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-layer-group mr-1"></i>
                        <p>
                            Stok İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/stock/create" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                <p>Stok İşlemi Oluştur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/stock" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Stok Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-scroll mr-1"></i>
                        <p>
                            Raporlar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/report/product" class="nav-link">
                                <i class="fas fa-scroll"></i>
                                <p>Ürün Analiz Raporlaması</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/report/customer" class="nav-link">
                                <i class="fas fa-scroll"></i>
                                <p>Müşteri Analiz Raporlaması</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/report/date" class="nav-link">
                                <i class="fas fa-scroll"></i>
                                <p>Tarih Bazlı Raporlama</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-cash-register mr-1"></i>
                        <p>
                            Kasa İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/stockCase/create" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                <p>Kasa Oluştur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=SITE_URL;?>/stockCase" class="nav-link">
                                <i class="fas fa-list-alt"></i>
                                <p>Kasa Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?=SITE_URL;?>/logout" class="nav-link btn-danger btn text-white">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Çıkış Yap</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
